<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanzasController extends Controller
{
    public function index()
    {
        return view('finanzas.finanzas'); // Asegúrate de que la vista exista
    }

}
