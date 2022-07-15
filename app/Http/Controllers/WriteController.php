<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WriteController extends Controller{
    public function writeID(){
        return view('dashboard.tools.writeID');
    }
    public function writeEN(){
        return view('dashboard.tools.writeEN');
    }
}
