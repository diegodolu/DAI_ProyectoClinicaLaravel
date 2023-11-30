<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() {
        if(Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)) {
            return redirect()->to('/login')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }

    public function authenticated(Request $request, $user) {
        //\Log::debug($user); //recibir parametros del usuario mediante debug
        if ($user->rol_id == 2){ // redireccionar segun los roles de usuario en este caso doctor a view doctor
            return view('doctor.doctor');
        }
        return redirect('/');
    }
}
