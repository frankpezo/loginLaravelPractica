<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [LoginController::class,'index'])->name('index');

Route::get('/login', [LoginController::class,'login'])->name('auth.login');
Route::post('/loginAuth', [LoginController::class,'loginAuth'])->name('auth.loginAuth');

Route::get('/register', [RegisterController::class,'register'])->name('auth.register');
Route::post('/create', [RegisterController::class,'create'])->name('auth.create');