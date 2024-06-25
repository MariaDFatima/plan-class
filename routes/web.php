<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Models\Livro;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('listar', function () {
        $biblioteca = Livro::where("id_usuario", auth()->user()->id)->paginate();
        return view('listar')->with("livros", $biblioteca);
    })->name("listar-livro");

    Route::get('editar/{livro}', function ($livro) {
        $livros = Livro::where("id", $livro)->first();
        return view('editar')->with("livro", $livros);
    })->name("editar-livro");
    Route::post('editar/{livro}', [LivroController::class, 'editar'])->name("editar-livro");
    Route::get('cadastrar', function () {
        return view('cadastrar');
    })->name("cadastrar-livro");
    Route::post('cadastrar', [LivroController::class, 'cadastrar'])->name("cadastrar-livro");
    Route::get('deletar/{livro}', [LivroController::class, 'deletar']);

});

require __DIR__.'/auth.php';
