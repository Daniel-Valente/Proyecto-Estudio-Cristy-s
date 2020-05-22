<?php

namespace App\Http\Controllers;

use App\Orden;
use App\Pago;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;

class OrdenPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function index(Orden $orden)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function create(Orden $orden)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Orden $orden)
    {
        $request->validate([
        'pago' => 'numeric|min:10',
        'nombre' => 'required',
        'apellido' => 'required',
        'correo' => 'required'
        ]);
        $request->merge(['restante' => ($orden->categoria->precio-$request->pago)]);

        if($request->restante > 0)
            $request->merge(['estatus' => 'abono']);
        else
        {
            $request->merge(['restante' => 0]);
            $request->merge(['estatus' => 'pagado']);
        }

        $request->merge(['fecha_Pago' => date('Y-m-d')]);
        $request->merge(['user_id' => \Auth::id()]);

        Stripe::setApiKey(config('services.stripe.secret'));
        $token = $request->stripeToken;

        $charge = Charge::create([
                'amount' => 1000,
                'currency' => 'mxn',
                'description' => 'Example charge',
                'source' => $token,
        ]);

        $orden->pagos()->create($request->except('nombre','apellido','correo'));

        return redirect()->route('orden.show', $orden->id)
            ->with(['mensaje' => 'Pago Realizado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orden  $orden
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden, Pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orden  $orden
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden, Pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orden $orden, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orden  $orden
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden, Pago $pago)
    {
        //
    }
}
