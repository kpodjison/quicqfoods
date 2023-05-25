<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin',['only'=>'index']);
    }

    public function index()
    {
        return view('sessions.admin.index');
    }

    public function store()
    {
        //validate request
        $credentials = request()->validate(
            [
                'username'=>'required|max:20|min:5',
                'email'=> 'required|max:50|unique:admins,email',
                'password'=>'required|confirmed|min:7'
            ]
        );

        //encrypt password
        $credentials['password'] = bcrypt($credentials['password']);

        //create admin
       Admin::create($credentials);

        //send a flash message
        session()->flash('loginSuccess',"Admin Account Created Successfully");

        //redirect
        return redirect()->route('admin-login');

    }

    public function login_admin(){

        //validate request
        $credentials = request()->validate([
            'email'=>'required|exists:admins,email',
            'password'=> 'required'
        ]);


        //login admin

        $authStatus = Auth::guard('webadmin')->attempt($credentials);
        if(!$authStatus)
        {
            session()->flash('loginError',"Invalid Email or Password!!");
        }

        $Admin = Auth::guard('webadmin')->user();
        session()->flash('loginSuccess',"Welcome Back");

        //redirect
        return redirect('admin/dashboard');
//        return view('sessions.admin.index',['Admin'=>$Admin]);


    }
}
