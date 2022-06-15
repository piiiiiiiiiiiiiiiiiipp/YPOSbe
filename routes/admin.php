<?php

use App\Http\Controllers\Doctor\DocAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::prefix('admin')->name('admin.')->group(function (){

    Route::middleware(['guest:admin'])->group(function (){
        Route::view('/login','admin.auth.login')->name('login');
        Route::post('/login',[AuthController::class,'store']);
    });



    Route::middleware(['auth:admin'])->group(function (){
        Route::view('/home','admin.home')->name('home');
        Route::post('/logout',[AuthController::class,'destroy'])->name('logout');

    });

});

Route::prefix('doctor')->name('doctor.')->group(function (){

    Route::middleware(['guest:doctor'])->group(function (){
        Route::view('/login','doctor.auth.login')->name('login');
        Route::post('/login',[DocAuthController::class,'store']);
    });



    Route::middleware(['auth:doctor'])->group(function (){
        Route::view('/home','doctor.home')->name('home');
        Route::post('/logout',[DocAuthController::class,'destroy'])->name('logout');

    });

});


