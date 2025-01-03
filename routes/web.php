<?php

use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\User\Auth\UserController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Http\Controllers\User\Auth\UserControllerfunction;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/market', function () {
    return view('user/market');
})->name('market');

Route::get('/about', function () {
    return view('user/about');
})->name('about');

Route::get('/contact', function () {
    return view('user/contact');
})->name('contact');


Route::controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('/register', 'index')->name('register.form');
    Route::post('/register', 'doregister')->name('register');
    Route::get('/login', 'loginpage')->name('login.form');
    Route::post('/login', 'dologin')->name('login');
});

Route::resource('user', UserController::class);
Route::middleware('auth')->prefix('/user')->name('user.')->group(function () {
    /*   Route::controller(UserController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    }); */
});
