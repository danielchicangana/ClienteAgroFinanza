<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AguacateController extends Controller
{
    public function index()
    {
        return view('Aguacatecodigo.Aguacate'); // Asegúrate de que la vista exista
    }
}
