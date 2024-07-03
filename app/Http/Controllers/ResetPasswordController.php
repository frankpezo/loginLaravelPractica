<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPassRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;
use App\Models\User;


class ResetPasswordController extends Controller
{


  public function resetPass(){
    return view('auth.modal.resetpass', ['showModal'=>true]);
  }


    public function storePass(ResetPassRequest $request){
        $request->validated(); // La validación se aplica automáticamente

        return redirect()->route('auth.login');
    }
}
