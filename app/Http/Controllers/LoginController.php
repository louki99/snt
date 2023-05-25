<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use App\Http\Helpers\Helper;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login() {
        return  view("login.login");
    }

    public function login_action(Request $request)
    {
           if(!Auth::attempt($request->only('email','password'))){
                return back()->withErrors([
                    'Error' => 'Credentials do not match'
                ]);
            }

            return redirect()->intended('/');

    }



    public function logout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}
