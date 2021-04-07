<?php

namespace Streitleak\RadiusWeb;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $login_result = "";

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }        

        return View('radiusweb::auth.login',['login_result' = $login_result ]);

    }

    public function logout()
    {
        return View('radiusweb::auth.logout');
    }
    public function resetpassword()
    {
        return View('radiusweb::auth.resetpassword');
    }
}

