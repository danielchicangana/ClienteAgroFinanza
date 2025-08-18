<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeController extends Controller
{
    public function index()
    {
        return view('Cafecodigo.Cafe'); // Asegúrate de que la vista exista
    }
}
