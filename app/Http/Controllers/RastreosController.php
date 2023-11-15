<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RastreosController extends Controller
{
    public function RastrearArticulo (Request $request){
        $articulo = $request->input('articulo');
        $response = Http::get("http://localhost:8003/api/articulo/$articulo");
        if ($response->successful()) {
            $data = $response->json();

            $articuloData = $data['articulo'] ?? null;
            $estadoPaquete = $articuloData['Estado'] ?? null;

            return view('rastreos')->with(['estadoPaquete' => $estadoPaquete]);
        } else {
            $errorMessage = $response->status() . ' ' . $response->header('Reason-Phrase');
            return view('rastreos')->with(['error' => $errorMessage]);
        }
}
}
