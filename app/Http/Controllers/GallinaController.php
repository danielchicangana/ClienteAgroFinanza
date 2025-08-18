<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GallinaController extends Controller
{
    public function index()
    {
        return view('layouts.app'); // Asegúrate de que la vista exista
    }
}
