<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CellphoneController;
use App\Http\Controllers\SaleController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('cellphones', CellphoneController::class);
Route::get('cellphones', [CellphoneController::class, 'index']);
Route::get('cellphones/{id}', [CellphoneController::class, 'show']);

Route::get('sales', [SaleController::class, 'index']);
Route::get('sales/detail', [SaleController::class, 'showSaleDetails']);
Route::get('sales/{id}', [SaleController::class, 'show']);
Route::post('sales', [SaleController::class, 'store']);
Route::delete('sales/{id}', [SaleController::class, 'destroy']);
Route::post('sales/{id}/add-products', [SaleController::class, 'addProducts']);