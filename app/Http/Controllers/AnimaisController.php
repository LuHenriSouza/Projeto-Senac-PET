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
        return view('projeto.animais.animal-index')->with(compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $sexos = Sexo::get();
        $tamanhos = Tamanho::get();
        $especies = Especie::get();
        $racas = Raca::get();
        $especieSelecionada = $request->input('especie');

        $nomeEspecieSelecionada = $especieSelecionada ? Especie::find($especieSelecionada)->especie : null;

        return view('projeto.animais.animal-create')->with(compact('sexos','tamanhos','especies','racas', 'especieSelecionada', 'nomeEspecieSelecionada'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request) {
            Animais::create($request->all());
        }

        return redirect()->back()->with('success', 'Cadastrado com Sucesso');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $animal = Animais::find($id);

        return view('projeto.animais.animal-show')->with(compact('animal'));
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
    public function destroy(int $id)
    {
        $animal = Animais::find($id);
        $animal->delete();

        return redirect()->back()->with('deleted', 'Animal deletado!');
    }
}
