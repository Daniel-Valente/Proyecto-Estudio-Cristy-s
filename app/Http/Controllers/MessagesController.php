<?php

namespace App\Http\Controllers;

Use App\User;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'id' => 'required',
            'content' => 'required|min:3'
        ], [
            'name.required' => __('I need your name')
        ]);
        Mail::to('Cristy@estudiocristys.com')->send(new MessageReceived($request));

        return view('home');
    }
}
