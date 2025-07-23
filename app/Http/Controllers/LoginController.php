<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome.login');
    }

    public function login(Request $request)
    {
        // Aquí la lógica de autenticación
    }
}


