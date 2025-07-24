<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view('welcome.login'); // o el nombre correcto de tu vista
    }

    public function authenticate(Request $request)
    {
        // Aquí validas los datos del login y haces el intento de autenticación
    }
}


