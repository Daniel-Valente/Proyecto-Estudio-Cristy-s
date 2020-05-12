<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Pago;
use App\Categoria;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PagoController extends Controller
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
        $pagos = Pago::with('user', 'categoria', 'cita')->paginate(15);
       return view('pagos.pagoIndex', compact('pagos'));
    }

    public function exportPdf()
    {
        $pagos = Pago::get();
        $pdf = PDF::loadView('pagos.pagoFactura', compact('pagos'));

        return $pdf->download('Factura.pdf');
    }

    public function pay(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Orden $orden)
    {
        //dd($orden->all());
        return view('pagos.pagoForm', compact('orden'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Orden $orden)
    {
        $request->validate([
            'pago' => 'required'
        ]);

        dd($orden->all());
        $request->merge(['orden_id' => $orden->id]);
        $request->merge(['fecha_Pago' => date('Y-m-d')]);
        $request->merge(['user_id' => \Auth::id()]);
        dd($request->all());

        Stripe::setApiKey(config('services.stripe.secret'));
        $token = $request->stripeToken;

        $charge = Charge::create([
                'amount' => $request->pago,
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' => $token,
        ]);

        return redirect()->route('pago.update');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        return view('pagos.pagoShow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
    }
}
