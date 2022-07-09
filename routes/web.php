<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('/contact', ContactController::class);

Route::group(['middleware'=>'guest'],function(){

		Route::get('login',[AuthController::class,'index'])->name('login');
		Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');
		Route::get('register',[AuthController::class,'register_view'])->name('register');
		Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});

Route::group(['middleware'=>'auth'],function(){

		Route::get('home',[ContactController::class,'index'])->name('home');
		Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

?>