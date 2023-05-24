<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/testpr', function(){
    return '실험중';
});



Route::get('/testpr2', function(){
    return view('login')->with('name','실험용');
});

Route::get('/testpr3', function(){
    return view('myview')->with('name','실험용');
});

use App\Http\Controllers\TaskController;
Route::resource('/task', TaskController::class);


Route::get('/', function () {
    return view('welcome');
});


