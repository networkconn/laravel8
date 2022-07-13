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
        return redirect('/login');
    }

    // user register
    public function register(){
        return view('dashboard.register');
    }
    public function regisForm(Request $request){
        $validasiData = $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:16',
        ]);
        $validasiData['password'] = bcrypt($validasiData['password']);
        if(User::count() < 5){
            User::create($validasiData);
            $request->session()->flash('berhasil', 'Register Berhasil, Silahkan Login Sekarang!!');
            return redirect('/login');
        } else{
            $request->session()->flash('error', 'Maaf, Tool Kami Telah memiliki jumlah Maksimal MEMBER, Silahkan hubungi Nur.akbar@gmail.com');
            return back();
        }
    }
    // user profile
    public function profile(){
        return view('layouts.profile');
    }
    public function profEdit(){
        return view('layouts.profEdit');
    }
}
