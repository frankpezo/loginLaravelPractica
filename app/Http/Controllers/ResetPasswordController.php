<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPassRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Mockery\Generator\StringManipulation\Pass\Pass;
use App\Models\User;


class ResetPasswordController extends Controller
{


/*   public function resetPass(){
    return view('auth.modal.resetpass', ['showModal'=>true]);
  }
 */

    public function storePass(ResetPassRequest $request){
        $request->validated(); // La validación se aplica automáticamente
        
        $user = User::where('email', $request->emailR)->first();
      
        //Verificar email
        if(!$user){
            return redirect()->route('auth.login')->with('danger', 'El correo no existe');
        }

        //Actualizar contraseña
        $user->password = bcrypt($request->passwordR);
        $user->save();

        return redirect()->route('auth.login')->with('success', 'Se actualizó la contraseña');
    }
}
