<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projeto.especie');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projeto.especie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Especie $especie)
    {
        //
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
    public function destroy(Especie $especie)
    {
        //
    }
}
