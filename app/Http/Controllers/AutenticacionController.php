<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AutenticacionController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('Nombre_Usuario', 'Contrasenia');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            return response()->json(['message' => 'Inicio de sesión exitoso', 'user' => $user], 200);
        }

        return response()->json(['message' => 'Nombre de usuario o contraseña incorrectos'], 401);
    }

}
