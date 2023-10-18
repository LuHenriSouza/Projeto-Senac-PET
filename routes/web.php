<?php

use App\Http\Controllers\{AnimaisController, EspecieController, PessoaController, PessoaInfoController, RacaController};
use App\Http\Controllers\ProfileController;
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


Route::get('/work', function () {
    return view('projeto.funcionario');
})->name('work');

Route::get('/animais', [AnimaisController::class, 'index'])->name('animais.index');
route::get('/racas', [RacaController::class], 'index')->name('racas.index');
Route::get('/especies', [EspecieController::class, 'index'])->name('especies.index');

Route::post('adotar', [PessoaController::class, 'store'])->name('adotar.post');

Route::get('/adotar', [PessoaInfoController::class, 'create'])->name('adotar');

Route::controller(AnimaisController::class)->prefix('/animais')->group(function () {
    Route::get('/', 'index')->name('animais.index');
    Route::get('/show/{id}', 'show')->name('animais.show');
    Route::get('/delete/{id}', 'destroy')->name('animais.destroy');
    Route::get('/novo', 'create')->name('animais.create');
    Route::post('/novo', 'store')->name('animais.store');
});
Route::controller(EspecieController::class)->prefix('/especies')->group(function () {
    Route::get('/', 'index')->name('especies.index');
    Route::get('/show/{id}', 'show')->name('especies.show');
    Route::get('/delete/{id}', 'destroy')->name('especies.destroy');
    Route::get('/novo', 'create')->name('especies.create');
    Route::post('/novo', 'store')->name('especies.store');
});

Route::controller(RacaController::class)->prefix('/racas')->group(function () {
    Route::get('/', 'index')->name('racas.index');
    Route::get('/show/{id}', 'show')->name('racas.show');
    Route::get('/delete/{id}', 'destroy')->name('racas.destroy');
    Route::get('/novo', 'create')->name('racas.create');
    Route::post('/novo', 'store')->name('racas.store');
});


require __DIR__ . '/auth.php';
