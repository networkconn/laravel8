<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KeywordController extends Controller{
    public function scrapeKW(){
        return view('dashboard.keyword.scrape');
    }
    public function risetKW(){
        return view('dashboard.keyword.riset');
    }
    public function KWdiff(){
        return view('dashboard.keyword.diff');
    }
    public function kwAlintitle(){
        return view('dashboard.keyword.allintitle');
    }
}
