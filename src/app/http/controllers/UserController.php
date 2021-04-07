<?php

namespace Streitleak\RadiusWeb;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login()
    {
        return View('radiusweb::auth.login');

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
