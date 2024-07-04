<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;

Route::get('/', [LoginController::class,'index'])->middleware(['indexProtection', 'noCache'])->name('index');

//Para proteger la rutas y el usuario no pueda regresar una vez loguado
Route::middleware(['authProtection', 'noCache'])->group(function(){

    Route::get('/login', [LoginController::class,'login'])->name('auth.login');
    Route::post('/loginAuth', [LoginController::class,'loginAuth'])->name('auth.loginAuth');
    Route::post('/create', [RegisterController::class,'create'])->name('auth.create');
 
}); 

  //Cerrar sesión 
 Route::post('/logout', [LoginController::class,'logout'])->name('auth.logout')->middleware('auth');

 //Recuperar contraseñas
 Route::post('/storePass', [ResetPasswordController::class,'storePass'])->name('auth.storePass');



