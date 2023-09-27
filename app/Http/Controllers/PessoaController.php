<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\PessoaInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request) {
            $pinfo = new PessoaInfo();
            $pessoa = new Pessoa();

            $pessoa->id_user = Auth::user()->id;
            $pessoa->telefone = $request->telefone;
            $pessoa->cep = $request->cep;
            $pessoa->estado = $request->uf;
            $pessoa->cidade = $request->cidade;
            $pessoa->endereco = $request->rua;
            $pessoa->numero = $request->numero;
            $pessoa->bairro = $request->bairro;

            $pinfo->teve_animal = $request->has('historico') ? 1 : 0;
            $pinfo->animal_guarda = $request->has('guarda') ? 1 : 0;
            $pinfo->qnt_pessoa_casa = $request->qnt;
            $pinfo->motivacao = $request->motivo;
            $pinfo->observacoes = $request->obs;

            $pessoa->save();

            $pinfo->id_pessoa = $pessoa->id_pessoa;

            $pinfo->save();

        }
        return view('projeto.adotar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }
}
