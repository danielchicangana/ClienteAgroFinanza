<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index()
    {
        return view('Historialcodigo.Historial'); // Asegúrate de que la vista exista
    }
}
