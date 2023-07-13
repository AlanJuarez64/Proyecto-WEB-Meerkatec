<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request)
{
    $response = Http::asForm()->post('http://localhost:8001/oauth/token', [
        'grant_type' => 'password',
        'client_id' => env('CLIENT_ID'),
        'client_secret' => env('CLIENT_SECRET'),
        'username' => $request->input('email'),
        'password' => $request->input('password'),
        'scope' => '',
    ]);

    if ($response->successful()) {
        // El inicio de sesión fue exitoso, obtén el token de acceso
        $accessToken = $response->json()['access_token'];

        // Guarda el token de acceso en la sesión o en cualquier otro lugar adecuado para tu aplicación

        // Redirige al usuario a la página de inicio después del inicio de sesión exitoso
        return view('home');
    } else {
        // El inicio de sesión falló, maneja el error apropiadamente
        // Por ejemplo, puedes mostrar un mensaje de error en la vista de log in
        $error = $response->json()['error'];

        return back()->withInput()->withErrors(['login' => $error]);
    }
}

}
