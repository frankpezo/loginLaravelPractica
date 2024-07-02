<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    

    public function register()
    {
        return view('auth.modal.register', ['showModal'=>true]);
    }
      
    public function create(RegisterRequest $request): RedirectResponse
    {
        
         User::create([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
         ]);

         return redirect()->route('auth.login')->with('success', 'Se registró el usuario correctamente');
    }
}
