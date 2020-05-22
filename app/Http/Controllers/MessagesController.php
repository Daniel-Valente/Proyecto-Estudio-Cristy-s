<?php

namespace App\Http\Controllers;

Use App\User;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = User::find($id);
        dd($user);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
        ]);
        Mail::to('estudiocristyprogra@gmail.com')->send(new MessageReceived($request));

        return 'Mensaje Enviado';
    }
}
