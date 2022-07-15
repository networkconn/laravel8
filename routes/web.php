<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WriteController;
use App\Http\Controllers\KeywordController;
use App\Http\Controllers\LisenseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GenerateContentController;

Route::get('/', [LoginController::class, 'index'])->middleware('auth');

// user login
Route::prefix('/user')->group( function(){
    Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'loginForm']);
    Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
    Route::get('/profile', [LoginController::class, 'profile'])->middleware('auth');
});

// Register Controller
Route::prefix('/register')->group(function(){
    Route::get('/user', [RegisterController::class, 'register'])->middleware('guest');
    Route::post('/user', [RegisterController::class, 'regisForm']);
});

// manage User
Route::prefix('/manageUser')->group(function(){
    Route::get('/', [UserController::class, 'manageUser'])->middleware('auth');
    Route::get('/add', [UserController::class, 'addUser'])->middleware('auth');
    Route::post('/add', [UserController::class, 'newUser'])->middleware('auth');
    Route::get('/edit/{user:id}', [UserController::class, 'userEdit'])->middleware('auth');
    Route::put('/edit/{user:id}', [UserController::class, 'editUser'])->middleware('auth');
    Route::delete('/delete/{user:id}', [UserController::class, 'destroy'])->middleware('auth');
});

// Tulis Ulang Artikel
Route::prefix('/write')->group(function(){
    Route::get('/id', [WriteController::class, 'writeID'])->middleware('auth');
    Route::get('/en', [WriteController::class, 'writeEN'])->middleware('auth');
});

// Keywords
Route::prefix('/keyword')->group(function(){
    Route::get('/scrape', [KeywordController::class, 'scrapeKW'])->middleware('auth');
    Route::get('/riset', [KeywordController::class, 'risetKW'])->middleware('auth');
    Route::get('/difficulity', [KeywordController::class, 'KWdiff'])->middleware('auth');
    Route::get('/allintitle', [KeywordController::class, 'kwAlintitle'])->middleware('auth');
});

// Generate Content Massal
Route::prefix('/generateContent')->group(function(){
    Route::get('/indonesia', [GenerateContentController::class, 'genID'])->middleware('auth');
    Route::get('/english', [GenerateContentController::class, 'genEN'])->middleware('auth');
});

// SEO Tools
Route::prefix('/seo')->group(function(){
    Route::get('/onpage', [SeoController::class, 'onpage'])->middleware('auth');
});


// user controller
Route::get('/profile/edit', [LoginController::class, 'profEdit'])->middleware('auth');
Route::put('/profile/edit', [UserController::class, 'profUpdate'])->middleware('auth');

// User Parse Lisense
Route::put('/{user:id}', [LisenseController::class, 'inputLisensi'])->middleware('auth');