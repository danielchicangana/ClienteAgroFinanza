<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarPerfilController extends Controller
{
     
    public function index()
    {
        return view('editarperfilcodigo.editarperfil'); // Asegúrate de que la vista exista
    }

}
