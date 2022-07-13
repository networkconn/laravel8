<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LisenseController extends Controller{
    public function inputLisensi(Request $request, $id){
        if($request->is_tokes === auth()->user()->is_tokes){
            auth()->user()->update([
                'is_pro' => 1,
            ]); return redirect('/')->with('LisensiBerhasil', 'Anda sudah bisa menggunaka semua tools');
        } else{
            return back()->with('filed', 'Hubungi nur.akbar1994@gmail.com untuk mendapatkan lisensi');
        }
    }
}
