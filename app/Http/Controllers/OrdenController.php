<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Orden;
use App\Paquete;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordens = Orden::with('user', 'categoria', 'cita')->paginate(15);
        return view('ordens.ordenIndex', compact('ordens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @r0eturn \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->pluck('nombre_Categoria', 'id');
        $paquetes = Paquete::all()->pluck('nombre_Paquete', 'id');
        return view('ordens.ordenForm', compact('categorias', 'paquetes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_Cita' => 'required|date',
            'descripcion' => 'required|min:5'
        ]);

        $request->merge(['estatus' => "Sin pagar"]);
        $request->merge(['cita_id' => '1']);
        $request->merge(['fecha_Orden' => date('Y-m-d')]);
        $request->merge(['user_id' => \Auth::id()]);

        if($request->fecha_Cita == $request->fecha_Orden)
        {
            $categorias = Categoria::all()->pluck('nombre_Categoria', 'id');
            return redirect()->route('orden.create')->with([
                'mensaje' => 'No puede solicitar la cita el mismo día de la orden.',
                'clase-alerta' => 'alert-warning'
                ]);
        }
        else
            Orden::create($request->all());

        return redirect()->route('cita.index')->with([
            'mensaje' => 'Cita creada.',
            'clase-alerta' => 'alert-success'
            ]);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        return view('ordens.ordenShow', compact('orden'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        $categorias = Categoria::all()->pluck('nombre_Categoria', 'id');
        $citas = Cita::all()->pluck('nombre_Cita', 'id');
        return view('ordens.ordenForm', compact('orden', 'categorias', 'citas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden)
    {
        $request->validate([
            'fecha_Cita' => 'required|date',
            'descripcion' => 'required|max:255',
        ]);
        if($request->cita_id == 2)
        {
            $request->merge(['estatus' => "Cancelado"]);
        }

        Orden::where('id', $orden->id)
            ->update($request->except('_token', '_method'));

        return redirect()->route('orden.show', $orden->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        $orden->delete();

        return redirect()->route('tarea.index')
        ->with([
        'mensaje' => 'Tarea eliminada.',
        'clase-alerta' => 'alert-warning'
        ]);
    }
}
