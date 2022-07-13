<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller{
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
            return redirect('/user/login');
        } else{
            $request->session()->flash('error', 'Maaf, Tool Kami Telah memiliki jumlah Maksimal MEMBER, Silahkan hubungi Nur.akbar@gmail.com');
            return back();
        }
    }
}
