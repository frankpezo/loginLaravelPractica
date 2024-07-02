<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [LoginController::class,'index'])->name('index');

//Para proteger la rutas y el usuario no pueda regresar una vez loguado
/* Route::middleware(['authProtection'])->group(function(){

    Route::get('/login', [LoginController::class,'login'])->name('auth.login');
    Route::post('/loginAuth', [LoginController::class,'loginAuth'])->name('auth.loginAuth');
    Route::post('/create', [RegisterController::class,'create'])->name('auth.create');
    Route::get('/register', [RegisterController::class,'register'])->name('auth.register');
    Route::get('/register', [RegisterController::class,'register'])->name('auth.register');

}); */

Route::get('/login', [LoginController::class,'login'])->name('auth.login');
Route::post('/loginAuth', [LoginController::class,'loginAuth'])->name('auth.loginAuth');
Route::post('/create', [RegisterController::class,'create'])->name('auth.create');
Route::get('/register', [RegisterController::class,'register'])->name('auth.register');


  //Cerrar sesión 
 Route::post('/logout', [LoginController::class,'logout'])->name('auth.logout')->middleware('auth');

