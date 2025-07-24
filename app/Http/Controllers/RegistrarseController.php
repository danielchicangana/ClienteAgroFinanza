<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarseController extends Controller
{
    public function show()
    {
        return view('registrarse.registro'); // o el nombre correcto de tu vista
    }

    public function register(Request $request)
    {
        // Aquí validas los datos del registro y creas el usuario
    }
}
