<?php

use App\Http\Controllers\ApiUserController;
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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get('주소/{유저가 주는 값}]) 유저로부터 받는값
Route::get('/users/{email}', [ApiUserController::class, 'userget']);
Route::post('/users',[ApiUserController::class, 'userpost']);
Route::put('/users/{email}',[ApiUserController::class, 'userput']);
Route::delete('/users/{email}',[ApiUserController::class, 'userdelete']);