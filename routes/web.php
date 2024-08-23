<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;

Route::get('/', [ImovelController::class, 'index'])->name('imoveis.index'); // Lista de imóveis
Route::get('/create', [ImovelController::class, 'create'])->name('imoveis.create'); // Formulário de criação
Route::post('/dados', [ImovelController::class, 'store'])->name('imoveis.store'); // Armazenar novo imóvel
Route::get('/edit/{codigo}', [ImovelController::class, 'edit'])->name('imoveis.edit');
Route::post('/update/{codigo}', [ImovelController::class, 'update'])->name('imoveis.update');
Route::post('/remove', [ImovelController::class, 'destroy'])->name('imoveis.destroy'); // Remover imóvel
Route::get('/casa-mais-cara', [ImovelController::class, 'casaMaisCara'])->name('imoveis.casaMaisCara');
Route::get('/imoveis/{tipo}', [ImovelController::class, 'listarPorTipo'])->name('imoveis.listarPorTipo');
Route::get('/ordenar-preco', [ImovelController::class, 'ordenarPorPreco'])->name('imoveis.ordenarPreco');



