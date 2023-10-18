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
    public function index(Request $request)
    {
        $search = $request->get('search');

        $racas = Raca::with('especies')
        ->where(function ($query) use ($search) {
            if ($search) {
                $query->where('raca', 'like', "%$search");
            }
        }) ->orderBy('updated_at', 'desc')->paginate(20);
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
        Raca::create($request->all());

        return redirect()->back()->with('success', 'Cadastrado com Sucesso');


    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $raca = Raca::find($id);

        return view('projeto.racas.raca-show')->with(compact('raca'));
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
    public function destroy(int $id)
    {
        $raca = Raca::find($id);
        $raca->delete();

        return redirect()->back()->with('deleted', 'Raça deletado!');
    }
}
