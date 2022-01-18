<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ContagensController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('qtdprodutos', [ProdutoController::class, 'getQtd']);

Route::get('/produtos/{init}/{end}', [ProdutoController::class, 'getProductPagination']);

Route::post('add', [ContagensController::class, 'salvarContagem']);

Route::get('pendentes/{filial}', [ProdutoController::class, 'getContagensPendentes']);
