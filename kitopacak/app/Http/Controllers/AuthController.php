<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('Register');
    }

    public function Login(){
        return view('Login');
    }
}
