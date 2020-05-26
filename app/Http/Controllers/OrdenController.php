<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Pago;
use App\Orden;
use App\Categoria;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
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
    public function index(Request $request)
    {
        $date = $request->get('date');
        $ordens = Orden::with('user', 'categoria', 'cita')->Date($date)->paginate(15);
        return view('ordens.ordenIndex', compact('ordens'));
    }

    public function pagoIndex(Request $request)
    {
        $date = $request->get('date');
        $pagos = Pago::orderBy('id')->Date($date)->paginate(15);
       return view('pagos.pagoIndex', compact('pagos'));
    }

    public function exportPdf()
    {
        $ordenes = Orden::get();

        $pdf = PDF::loadView('ordens.ordenFactura', compact('ordenes'));

        return $pdf->download('FacturaOrdenes.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @r0eturn \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect()->route('cita.index')
        ->with([
        'mensaje' => 'Tarea eliminada.',
        'clase-alerta' => 'alert-warning'
        ]);
    }
}
