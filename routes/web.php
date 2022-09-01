<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UndanganTarunaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


Route::resource('taruna/undangan',UndanganTarunaController::class);
Route::resource('admin',AdminController::class)->middleware('auth');

Route::get('/invitation/taruna/{slug}',[UndanganTarunaController::class,'show_home']);
Route::get('/invitation_acara/taruna/{slug}',[UndanganTarunaController::class,'show_acara']);
Route::get('/invitation_gallery/taruna/{slug}',[UndanganTarunaController::class,'show_gallery']);

Route::put('/invitation/taruna/undangan/batal_konfirmasi/{id}',[UndanganTarunaController::class,'batal_konfirmasi']);


Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->name('login');
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

