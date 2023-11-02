<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CorreoMailable;

class EnviosController extends Controller
{
    public function EnviarCorreo(Request $request)
    {
        $correo = $request->input('Correo');
        $id = $request->input('id');

        Mail::to('envios.quickhaul@gmail.com')->send(new CorreoMailable($correo, $id));


        $message = "Confirmación enviada a administración correctamente.";
    
        return redirect('/envios')->with('success_message', $message);
    }

}
