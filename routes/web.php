<?php

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProfileController;
use App\Models\PessoaInfo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('dashboard'));
});

Route::get('/dashboard', function () {
    return view('projeto.dashboard');
})->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/adotar', function () {
    return view('projeto.adotar');
})->name('adotar');

Route::post('adotar', [PessoaController::class, 'store'])->name('adotar.post');

Route::get('/consultar-cep-ajax/{cep}', 'CEPController@consultarCEPAjax');

require __DIR__ . '/auth.php';
