<?php

use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// 아래 주소 구조는 item으로 가면 그 안에 index로 다시 가도록 하는 구조
Route::prefix('/items')->group( function(){
    Route::get('/',[ItemController::class, 'index']);
    Route::post('/',[ItemController::class, 'store']);
    Route::put('/{id}',[ItemController::class, 'update']);
    Route::delete('/{id}',[ItemController::class, 'destroy']);
});