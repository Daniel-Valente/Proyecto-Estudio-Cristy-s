<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiController extends Controller
{
    public function index()
    {
        $users = User::get();
        return response()->json($users, 200);
    }
}
