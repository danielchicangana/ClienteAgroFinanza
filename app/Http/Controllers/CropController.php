<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CropController extends Controller
{
    private function fetchDataFromApi($url)
{
    $response = Http::get($url);
    return $response->json();
}

public function index()   // http://api.codersfree.test/v1/crops?included=posts
{
    $url = env('URL_SERVER_API');

    $crops = $this->fetchDataFromApi($url . '/crops');

    return view('crops.index', compact('crops'));
}

public function show($id)
{
    $url = env('URL_SERVER_API');

    $crop = $this->fetchDataFromApi($url . '/crops/' . $id);

    return view('crops.show', compact('crop'));
}

}
