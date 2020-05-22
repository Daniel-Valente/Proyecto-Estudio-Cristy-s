<?php

namespace App\Http\Controllers;

use App\User;
use App\Pago;
use App\Orden;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller
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
        $users = User::get();
        $pagos = Pago::with('orden')->paginate('15');
        $ordenes = Orden::with('user')->paginate('15');
        return view('users.userShow', compact('users', 'pagos', 'ordenes'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::get();
        return view('users.userShow', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.userForm')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'avatar' => 'required'
        ]);

        $entrada=$request->all();

        if($archivo=$request->file('avatar'))
        {
            $nombre = $archivo->getClientOriginalName();

            $archivo->move('images', $nombre);

            $entrada['avatar'] = $nombre;
        }
        $request = $entrada;

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->descripcion = $request['descripcion'];
        $user->avatar = $request['avatar'];
        $user->save();

        return redirect()->route('perfil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $orden)
    {
        $orden->merge(['cita_id' => '2']);

        return redirect()->route('home')
        ->with([
        'mensaje' => 'Tarea eliminada.',
        'clase-alerta' => 'alert-warning'
        ]);
    }
}
