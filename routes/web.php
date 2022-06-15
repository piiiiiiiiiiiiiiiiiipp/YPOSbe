<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact-us', [ContactController::class,'contact']);
Route::post('/send-message', [ContactController::class,'sendEmail'])->name('contact.send');

Route::post('/captureOrder',[PayPalController::class, 'capturePayment']);
