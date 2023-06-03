<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/login', [UserController::class,'login'])->name('user.login'); //name설정을 통해서 라우터를 쉽게 불러올 수 있다. 네임 설정을 통해서 라우터변경사항 발생시 url만 수정 하도록 할 수 있다.
Route::post('/users/loginpost',[UserController::class,'loginpost'])->name('user.loginpost');



use App\Http\Controllers\BoardController;
// Route::resource('/board',BoardController::class);
Route::get('/board/list',[BoardController::class, 'list'])->name('board.list');
Route::get('/board/write',[BoardController::class, 'write'])->name('board.write');
Route::post('board/write', [BoardController::class, 'store'])->name('board.store');