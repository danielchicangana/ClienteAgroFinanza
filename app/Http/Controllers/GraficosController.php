<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficosController extends Controller
{
    public function index()
    {
        return view('Graficoscodigo.Grafico'); // Asegúrate de que la vista exista
    }
}
