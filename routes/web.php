<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/nxvinh-register', function (){
    return view('register');
});
Route::post('/nxvinh-register', [RegisterController::class, 'RegisterSubmit'])->name('register.submit');


Route::get('/nxvinh-login',[LoginController::class,'index'])->name('login.index');
Route::post('/nxvinh-login',[LoginController::class,'loginSubmit'])->name('login.submit');