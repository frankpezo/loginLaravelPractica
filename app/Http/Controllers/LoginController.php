<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    
    public function login(){
        return view('auth.login');
    }

    


   

 


}
