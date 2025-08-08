<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgronomiaController extends Controller
{
    
    public function index()
    {
        return view('agronomiacodigo.agronomia'); // Asegúrate de que la vista exista
    }

    

}
