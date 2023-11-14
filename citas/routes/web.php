<?php

use App\Http\Controllers\CitasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterControler;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('home.index');
});

Route::get('/citas', function () {
    return view('layouts.citas');
});


Route::get('/register',[RegisterControler::class, 'show'] );

Route::post('/register',[RegisterControler::class, 'register'] );


Route::get('/login', [LoginController::class, 'show'])->name('login.form');

Route::post('/login',[LoginController::class, 'login'] );

Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/logout', [LogOutController::class,'logout']);

Route::post('/guardar-cita', [CitasController::class, 'agendar']);

Route::get('/citas', [CitasController::class, 'index']);

