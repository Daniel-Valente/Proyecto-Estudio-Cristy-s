<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $users = \App\User::get();
        return response()->json($users, 200);
    }
}
