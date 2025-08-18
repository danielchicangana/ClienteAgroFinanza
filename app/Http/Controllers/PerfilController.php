<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PerfilController extends Controller
{
    // Mostrar el perfil del usuario
    public function show()
    {
        $user = session('user');

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'Debes iniciar sesión']);
        }

        return view('perfil.show', compact('user'));
    }

    // Formulario de edición
    public function edit()
    {
        $user = session('user');

        if (!$user) {
            return redirect()->route('login')->withErrors(['error' => 'Debes iniciar sesión']);
        }

        return view('perfil.edit', compact('user'));
    }

    // Guardar cambios
    public function update(Request $request, $id)
    {
        $response = Http::put("http://api.AgroFinanzas.test/api/user_apps/$id", [
            'name'       => $request->input('name'),
            'email'      => $request->input('email'),
            'birth_date' => $request->input('birth_date'),
            // TODO: manejar foto si la API lo soporta
        ]);

        if ($response->successful()) {
            $data = $response->json();

            // ✅ Desanidar si viene dentro de "data"
            $userData = isset($data['data']) ? $data['data'] : $data;

            // Guardamos limpio en sesión
            session(['user' => $userData]);

            return redirect()->route('perfil.show')->with('success', 'Perfil actualizado correctamente');
        }

        return back()->withErrors(['update_error' => 'No se pudo actualizar el perfil']);
    }
}
