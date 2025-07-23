<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserAppController extends Controller
{
    private function fetchDataFromApi($url)
{
    $response = Http::get($url);
    return $response->json();
}

public function index()   // http://api.codersfree.test/v1/user_apps?included=posts
{
    $url = env('URL_SERVER_API');

    $userApps = $this->fetchDataFromApi($url . '/user_apps');

    return view('userApp.index', compact('userApps'));
}

public function show($id)
{
    $url = env('URL_SERVER_API');

    $userApp = $this->fetchDataFromApi($url . '/user_apps/' . $id);

    return view('userApp.show', compact('userApp'));
}

}
