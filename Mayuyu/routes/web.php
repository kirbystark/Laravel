<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('register', [AuthController::class,'register'])->name('register');

Route::get('login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('login', [AuthController::class,'login'])->name('login');

Route::get('dashboard', function() {
    return view('components.dashboard');
})->middleware('auth')->name('dashboard');

Route::get('projects', function () {
    return view('components.projects');
});

Route::get('contact', function () {
    return view('components.contact');
});

Route::get('about', function () {
    return view('components.about');
});

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');
