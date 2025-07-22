<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoffeCropController extends Controller
{
    private function fetchDataFromApi($url)
{
    $response = Http::get($url);
    return $response->json();
}

public function index()   // http://api.codersfree.test/v1/coffe_crops?included=posts
{
    $url = env('URL_SERVER_API');

    $coffeCrops = $this->fetchDataFromApi($url . '/coffe_crops');

    return view('coffe_crops.index', compact('coffeCrops'));
}

public function show($id)
{
    $url = env('URL_SERVER_API');

    $coffeCrop = $this->fetchDataFromApi($url . '/coffe_crops/' . $id);

    return view('coffe_crops.show', compact('coffeCrop'));
}

}
