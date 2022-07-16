<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller{
    public function forgot(){
        return view('auth.forgot');
    } public function forgotPass(Request $request){
        $request->validate(['email' => 'required|email:dns']);
        $status = Password::sendResetLink(
            $request->only('email')
        ); return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
