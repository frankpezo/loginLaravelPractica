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
    $user = Auth::user();
    return view('index', compact('user'));
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

    public function logout(Request $request){
           Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect()->route('auth.login');
    }
    


   

 


}
