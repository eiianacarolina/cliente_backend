<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('produto', [ProdutoController::class, 'store']);

Route::get('produto', [ProdutoController::class, 'index']);

Route::put('produto', [ProdutoController::class, 'update']);

Route::delete('produto/{id}',[ProdutoController::class, 'delete']);

Route::get('produto/{id}', [ProdutoController::class, 'show']);

Route::get('produto/find/name', [ProdutoController::class, 'findByName']);

Route::get('produto/find/maior', [ProdutoController::class, 'pesquisarValorMaiorQue']);

Route::get('produto/find/entre/valor', [ProdutoController::class, 'pesquisarEntreValores']);

Route::get('produto/find/marca', [ProdutoController::class, 'pesquisarPorMarca']);

Route::get('produto/find/ano', [ProdutoController::class, 'pesquisarPorAno']);

Route::get('produto/find/mes', [ProdutoController::class, 'pesquisarPorMes']);


/* Atividade */

Route::post('cliente', [ClienteController::class, 'store']);

Route::get('cliente/find/name', [ClienteController::class, 'findByName']);

Route::get('cliente/{id}', [ClienteController::class, 'show']);

Route::get('cliente', [ClienteController::class, 'index']);

Route::put('cliente', [ClienteController::class, 'update']);

Route::delete('cliente/{id}', [ClienteController::class, 'delete']);

Route::get('cliente/find/email', [ClienteController::class, 'findByEmail']);

Route::get('cliente/find/cpf', [ClienteController::class, 'findByCpf']);

Route::get('cliente/find/cidade', [ClienteController::class, 'findByCidade']);

Route::get('cliente/find/estado', [ClienteController::class, 'findByEstado']);

Route::get('cliente/find/ano', [ClienteController::class, 'findByYear']);