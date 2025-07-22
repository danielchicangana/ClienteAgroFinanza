<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FinanceController extends Controller
{
    private function fetchDataFromApi($url)
{
    $response = Http::get($url);
    return $response->json();
}

public function index()   // http://api.codersfree.test/v1/finances?included=posts
{
    $url = env('URL_SERVER_API');

    $finances = $this->fetchDataFromApi($url . '/finances');

    return view('finances.index', compact('finances'));
}

public function show($id)
{
    $url = env('URL_SERVER_API');

    $finance = $this->fetchDataFromApi($url . '/finances/' . $id);

    return view('finances.show', compact('finance'));
}

}
