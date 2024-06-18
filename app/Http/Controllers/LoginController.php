<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
//------------ SHOW -----------------------
    public function show(){
        return view('login.show');
    }
//------------ LOG IN  -----------------------
    public function login(Request $request){
        //$values = $request->post();*/
        $login = $request->login;
        $password = $request->password;
        $credentials = ['email' => $login , 'password' => $password];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route('homepage')->with('success','You logged in successfully .');
        }else{
            return back()->withErrors([
                'login'=>'Email or password incorrect.'
            ])->onlyInput('login');
        }
    }
//------------ LOG OUT -----------------------
    public function logout(){

        Session::flush();

        Auth::logout();

        return to_route('login')->with('success','You logged out successfully ');

    }
}
