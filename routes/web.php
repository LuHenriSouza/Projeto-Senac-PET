<?php

use App\Http\Controllers\{PessoaController, PessoaInfoController, AnimaisController};
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

    Route::get('/work',function () {
        return view('projeto.funcionario');
    })->name('work');
});

Route::post('adotar', [PessoaController::class, 'store'])->name('adotar.post');

Route::get('/adotar', [PessoaInfoController::class, 'create'])->name('adotar');


Route::get('/animal', //function (){return view('projeto.test');}
[AnimaisController::class, 'create']
)->name('animal');

Route::get('/especies', function () {
    return view('projeto.especie');
})->name('especies');

Route::get('/racas', function () {
    return view('projeto.raca');
})->name('racas');

// cometario teste


require __DIR__ . '/auth.php';
