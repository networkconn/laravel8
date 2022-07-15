<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GenerateContentController extends Controller{
    public function genID(){
        return view('dashboard.gen.id');
    }
    public function genEN(){
        return view('dashboard.gen.en');
    }
}
