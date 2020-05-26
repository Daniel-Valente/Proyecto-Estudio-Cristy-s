<?php

namespace App\Http\Controllers;

use App\User;
use App\Pago;
use App\Orden;
use Illuminate\Http\Request;
use App\Mail\DeleteUserReceived;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->get('name');
        $users = User::Name($name)->paginate(15);
        return view('users.userIndex', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::get();
        $pagos = Pago::with('orden')->paginate('15');
        $ordenes = Orden::with('user')->paginate('15');
        return view('users.userShow', compact('users', 'pagos', 'ordenes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
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
     * @param  \App\user  $user
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

        return redirect()->route('usuario.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        Mail::to('estudiocristyprogra@gmail.com')->send(new DeleteUserReceived());

        return redirect()->route('usuario.index')
        ->with([
        'mensaje' => 'Usuario eliminado.',
        'clase-alerta' => 'alert-warning'
        ]);
    }
}
