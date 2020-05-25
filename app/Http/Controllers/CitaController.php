<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Paquete;
use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
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
        return view('citas.citaIndex', compact('ordens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all()->pluck('nombre_Categoria', 'id');
        return view('citas.citaForm', compact('categorias'));
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
            return redirect()->route('cita.create')->with([
                'mensaje' => 'No puede solicitar la cita el mismo día de la orden.',
                'clase-alerta' => 'alert-warning'
                ]);
        }
        else
            Orden::create($request->all());

        return redirect()->route('cita.index')->with([
            'mensaje' => 'Cita creada.',
            'clase-alerta' => 'alert-success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        return view('ordens.ordenShow', compact('orden'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        $categorias = Categoria::all()->pluck('nombre_Categoria', 'id');
        return view('ordens.ordenForm', compact('orden', 'categorias'));
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
            'descripcion' => 'required|max:255'
        ]);

        Orden::where('id', $orden->id)
            ->update($request->except('_token', '_method'));

        return redirect()->route('orden.show', $orden->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        $orden->merge(['cita_id' => '2']);

        return redirect()->route('home')
        ->with([
        'mensaje' => 'Tarea eliminada.',
        'clase-alerta' => 'alert-warning'
        ]);
    }
}
