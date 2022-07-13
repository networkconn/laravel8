<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    // dashboards
    public function index(){
        return view('index',[
            'user' => User::all()
        ]);
    }

    // user login
    public function login(){
        return view('dashboard.login');
    }
    public function loginForm(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back();
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/user/login');
    }
    // user profile
    public function profile(){
        return view('layouts.profile');
    }
    public function profEdit(){
        return view('layouts.profEdit');
    }
}
