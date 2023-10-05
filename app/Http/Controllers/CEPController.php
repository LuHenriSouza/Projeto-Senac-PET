<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CEPController extends Controller
{
    public function consultarCEPAjax($cep)
    {
        // Faça a consulta ao serviço de CEP (exemplo usando ViaCEP)
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->ok()) {
            $endereco = $response->json();
            return response()->json([
                'cidade' => $endereco['localidade'],
                'estado' => $endereco['uf'],
                'rua' => $endereco['logradouro']
            ]);
        } else {
            return response()->json(['error' => 'CEP não encontrado'], 404);
        }
    }
}
