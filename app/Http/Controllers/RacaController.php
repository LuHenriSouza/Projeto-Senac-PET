<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use App\Models\Raca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RacaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $racas = Raca::paginate(10);
        return view('projeto.racas.raca-index')->with(compact('racas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especies = Especie::get();
        return view('projeto.racas.raca-create')->with(compact('especies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255', // Validação para o campo nome
        ]);

        Raca::create([
            'nome' => $request->nome, // Obtém o nome da raça do formulário
        ]);

        Session::flash('success', 'Raça cadastrada com sucesso!');
        return redirect()->route('projeto.racas.raca-create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Raca $raca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Raca $raca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Raca $raca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Raca $raca)
    {
        //
    }
}
