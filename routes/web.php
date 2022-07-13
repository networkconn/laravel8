<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LisenseController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

Route::get('/', [LoginController::class, 'index'])->middleware('auth');
// user login
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'loginForm']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::get('/profile', [LoginController::class, 'profile'])->middleware('auth');

// user register
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'regisForm']);
// Tulis Ulang Artikel
Route::get('/write-id', [DashboardController::class, 'writeID'])->middleware('auth');
Route::get('/write-en', [DashboardController::class, 'writeEN'])->middleware('auth');
// Keywords
Route::get('/scrape-kw', [DashboardController::class, 'scrapeKW'])->middleware('auth');
Route::get('/riset-kw', [DashboardController::class, 'risetKW'])->middleware('auth');
Route::get('/kw-diff', [DashboardController::class, 'KWdiff'])->middleware('auth');
Route::get('/kw-alintitle', [DashboardController::class, 'kwAlintitle'])->middleware('auth');
// Generate Content Massal
Route::get('/genID', [DashboardController::class, 'genID'])->middleware('auth');
Route::get('/genEN', [DashboardController::class, 'genEN'])->middleware('auth');
// SEO Tools
Route::get('/onpage', [DashboardController::class, 'onpage'])->middleware('auth');

// manage User
Route::get('/manageUser', [UserController::class, 'manageUser'])->middleware('auth');
Route::get('/manageUser/add', [UserController::class, 'addUser'])->middleware('auth');
Route::post('/manageUser/add', [UserController::class, 'newUser'])->middleware('auth');
Route::get('/manageUser/edit/{user:id}', [UserController::class, 'userEdit'])->middleware('auth');
Route::put('/manageUser/edit/{user:id}', [UserController::class, 'editUser'])->middleware('auth');
Route::delete('/delete/{user:id}', [UserController::class, 'destroy'])->middleware('auth');

// user controller
Route::get('/profile/edit', [LoginController::class, 'profEdit'])->middleware('auth');
Route::put('/profile/edit', [UserController::class, 'profUpdate'])->middleware('auth');

// User Parse Lisense
Route::put('/{user:id}', [LisenseController::class, 'inputLisensi'])->middleware('auth');
// reset passwords
Route::get('/password/reset', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');
Route::post('/password/reset', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');
Route::get('/password/reset/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');