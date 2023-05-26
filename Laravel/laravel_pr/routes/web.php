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
Route::resource('/만들다', TaskController::class);

Route::get('/method', function(){
    return 'GET Method!! get로 받아 본다.!';
});

Route::post('/method', function(){
    return 'POST Method!! post로 받아 본다.!';
});

Route::put('/method', function(){
    return 'PUT Method!! post로 받아 본다.!';
});


Route::get('/query', function(Request $request){
    return $request->id.", ".$request->name.",".$request->title;
});


Route::get('/namehouse', function () {
    return view('myview');
});

Route::get('/name' , function(){
    return '이거 돌려줌?';
})->name('name.index');






Route::get('/', function () {
    return view('welcome');
});



