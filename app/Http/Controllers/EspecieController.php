<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especie;


class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especies = Especie::all();
        return view('especies.index', compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:50',
            'descricao' => 'nullable|string|max:200',
        ]);

        Especie::create($request->all());

        return redirect()->route('especies.index')
            ->with('success', 'Espécie cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function show(Especie $especie)
    {
        return view('especies.show', compact('especie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function edit(Especie $especie)
    {
        return view('especies.edit', compact('especie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especie $especie)
    {
        $request->validate([
            'nome' => 'required|string|max:50',
            'descricao' => 'nullable|string|max:200',
        ]);

        $especie->update($request->all());

        return redirect()->route('especies.index')
            ->with('success', 'Espécie atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especie  $especie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especie $especie)
    {
        $especie->delete();

        return redirect()->route('especies.index')
            ->with('success', 'Espécie excluída com sucesso.');
    }
}
