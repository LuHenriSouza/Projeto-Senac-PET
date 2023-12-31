<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        $especies = Especie::withCount('raca')
        ->where(function ($query) use ($search) {
            if ($search) {
                $query->where('especie', 'like', "%$search%");
            }
        })->orderBy('updated_at', 'desc')->paginate(20);

        return view('projeto.especies.especie-index')->with(compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projeto.especies.especie-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Especie::create([
            'especie' => $request->especie
        ]);

        return redirect()->back()->with('success', 'Cadastrado com Sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $especie = Especie::find($id);
        return view('projeto.especies.especie-show')->with(compact('especie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Especie $especie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Especie $especie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $especie = Especie::find($id);
        $especie->delete();

        return redirect()->back()->with('deleted', 'Espécie deletada!');
    }
}
