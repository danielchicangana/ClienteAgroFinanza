<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GastosController extends Controller
{
     public function index()
    {
        return view('Gastoscodigo.Gastos'); // Asegúrate de que la vista exista
    }
}
