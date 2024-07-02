<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
   public function index(){
    return view('index');
   }

    public function login(){
        return view('auth.login');
    }

    public function loginAuth(LoginRequest $request ){
         //Validamos credenciales
          $credenciales = $request->only(['email', 'password']);

          if(Auth::attempt($credenciales)){
            $request->session()->regenerate();

            return redirect()->intended('/')->with('success', 'Se inició sesión con éxito');
          }

          return redirect()->route('auth.login')->with('danger', 'Datos incorrectos');
            
           


    } 
    


   

 


}
