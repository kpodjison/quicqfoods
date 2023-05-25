<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }
    
    public function login_admin(){

        return view('login.admin.login');
    }

}