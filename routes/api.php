<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;

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

Route::get('produtos', [ProdutoController::class, 'getAll']);


Route::get('/produtos/jsonEan', function () {
    $products = ProdutoController::getComEan();
    return json_encode($products);
});

Route::get('/produtos/jsonSemEan', function () {
    $products = ProdutoController::getSemEan()->toJson(JSON_PRETTY_PRINT);
    return response($products);
});

