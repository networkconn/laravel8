<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeoController extends Controller{
    public function onpage(){
        return view('dashboard.seo.onpage');
    }
}
