<?php

namespace App\Http\Controllers;

use App\User;
use App\Tipo;
use Illuminate\Http\Request;

class TipoController extends Controller
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
        $tipos = Tipo::all();
        return view('tipos.tipoIndex', compact('tipos'));
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
     * @param  \App\Tipo  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo $tipo)
    {
        $users = User::all()->pluck('name', 'id');
        return view('tipos.tipoForm', compact('tipo', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo $tipo)
    {
        $tipo->nombre_Tipo = $request->nombre_Tipo;
        $tipo->save();

        //Relaciona Tipo con Usuarios
        $tipo->users()->sync($request->user_id);

        return redirect()->route('tipo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
    }
}
