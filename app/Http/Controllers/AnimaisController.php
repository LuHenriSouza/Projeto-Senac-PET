<?php


namespace App\Http\Controllers;

use App\Models\animais;
use App\Models\Especie;
use App\Models\Raca;
use App\Models\Sexo;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animais = animais::paginate(10);
        return view('projeto.animal-index')->with(compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sexos = Sexo::get();
        $tamanhos = Tamanho::get();
        $especies = Especie::get();
        $racas = Raca::get();

        return view('projeto.test')->with(compact('sexos','tamanhos','especies','racas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request) {
            $animal = new Animais();

            $animal->nome = $request->nome;
            $animal->especie = $request->especie;
            $animal->idade = $request->idade;
            $animal->cor = $request->cor;
            $animal->raca = $request->raca;
            $animal->especie = $request->especie;



            $animal->save();


        }

        return view('projeto.test');

    }

    /**
     * Display the specified resource.
     */
    public function show(animais $animais)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(animais $animais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, animais $animais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(animais $animais)
    {
        //
    }
}
