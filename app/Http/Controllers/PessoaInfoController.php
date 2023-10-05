<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\PessoaInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PessoaInfoController extends Controller
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
        return view('projeto.adotar');
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
    public function show(PessoaInfo $pessoaInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PessoaInfo $pessoaInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PessoaInfo $pessoaInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PessoaInfo $pessoaInfo)
    {
        //
    }
}
