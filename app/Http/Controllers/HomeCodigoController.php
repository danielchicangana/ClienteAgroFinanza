<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCodigoController extends Controller
{
    public function index()
    {
        return view('homecodigo.home');
    }

    public function show($id)
    {
        return view('homecodigo.home', ['id' => $id]);
    }
}





