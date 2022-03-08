<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

//----------------------------------- PRODUTO ---------------------------------------------------

Route::get('/', function () {
    return view('/produto');
});

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto/create',[ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produto/create', [ProdutoController::class, 'store'])->name('produto.store');

Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');

Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.uptade');

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');
//------------------------------------ PRODUTO --------------------------------------------------






//------------------------------------ CATEGORIA ------------------------------------------------

Route::get('/', function(){
    return view('/categorias');
});
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');



//------------------------------------ CATEGORIA ------------------------------------------------