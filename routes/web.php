<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UndanganTarunaController;
use App\Http\Controllers\UndanganPejabatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPejabatController;
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


Route::resource('admin',AdminController::class)->middleware('auth');
Route::resource('adminpejabat',AdminPejabatController::class)->middleware('auth');

Route::get('/taruna/exportexcel',[AdminController::class,'exportexcel'])->name('exportexcel');
Route::get('/pejabat/exportexcel',[AdminPejabatController::class,'exportexcelpejabat'])->name('exportexcelpejabat');

Route::resource('taruna/undangan',UndanganTarunaController::class);
Route::get('/invitation/taruna/{slug}',[UndanganTarunaController::class,'show_home']);
Route::get('/invitation_isi/taruna/{slug}',[UndanganTarunaController::class,'show']);
Route::get('/invitation_acara/taruna/{slug}',[UndanganTarunaController::class,'show_acara']);
Route::get('/invitation_gallery/taruna/{slug}',[UndanganTarunaController::class,'show_gallery']);
Route::put('/invitation/taruna/batal_konfirmasi/{id}',[UndanganTarunaController::class,'batal_konfirmasi']);

Route::resource('pejabat/undangan',UndanganPejabatController::class);
Route::get('/invitation/pejabat/{slug}',[UndanganPejabatController::class,'show_home']);
Route::get('/invitation_isi/pejabat/{slug}',[UndanganPejabatController::class,'show']);
Route::get('/invitation_acara/pejabat/{slug}',[UndanganPejabatController::class,'show_acara']);
Route::get('/invitation_gallery/pejabat/{slug}',[UndanganPejabatController::class,'show_gallery']);
Route::put('/invitation/pejabat/batal_konfirmasi/{id}',[UndanganPejabatController::class,'batal_konfirmasi']);

Route::get('/login',[LoginController::class,'index'])->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->name('login');
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

