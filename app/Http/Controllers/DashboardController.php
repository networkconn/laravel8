<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller{
    // keywords
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
    // Generate Content Massal
    public function genID(){
        return view('dashboard.gen.id');
    }
    public function genEN(){
        return view('dashboard.gen.en');
    }
    // SEO Tools
    public function onpage(){
        return view('dashboard.seo.onpage');
    }
}
