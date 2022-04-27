<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    //Aquí se valida el acceso del usuario
    public function login(){
        $credentials = request()->validate([
            'email' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
    
        $remember = request()->filled('remember');
    
        if (Auth::attempt($credentials, $remember)){
            request()->session()->regenerate();
    
            return redirect('Consultoria');
        }
    
        throw ValidationException::withMessages([
            'email' => 'Estás credenciales no coinciden con nuestros registros'
        ]);
    }

    public function logout(Request $request, Redirector $redirect){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $redirect->to('/');
    }
}
