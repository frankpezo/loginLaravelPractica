<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    

    public function create(RegisterRequest $request): RedirectResponse
    {
         // Verificar si el correo electrónico ya existe
         $existingUser = User::where('email', $request->emailRegister)->first();

         if ($existingUser) {
             // Redirigir con un mensaje de error si el correo ya existe
             return back()->with('danger', 'El correo electrónico ya está registrado.');
         }
        
         User::create([
            'name'=>$request->nameRegister,
            'lastname'=>$request->lastnameRegister,
            'email'=>$request->emailRegister,
            'password'=>bcrypt($request->passwordRegister)
         ]);

         return redirect()->route('auth.login')->with('success', 'Se registró el usuario correctamente');
    }
}
