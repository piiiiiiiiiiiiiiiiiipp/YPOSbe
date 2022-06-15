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
Route::view('/','index')->name('/');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact-us', [ContactController::class,'contact']);
Route::post('/send-message', [ContactController::class,'sendEmail'])->name('contact.send');

Route::post('/captureOrder',[PayPalController::class, 'capturePayment']);

require __DIR__.'/admin.php';

Route::view('/forum','forum.forum')->name('forum');
Route::view('/forum/cat','forum.cat')->name('cat');
Route::view('/forum/new','forum.new')->name('new');
Route::view('/forum/news','forum.news.portal')->name('news');



    Route::view('/forum/news/abuse','forum.news.abuse')->name('abuse');
    Route::view('/forum/news/anxiety','forum.news.anxiety')->name('anxiety');
    Route::view('/forum/news/bullying','forum.news.bullying')->name('bullying');
    Route::view('/forum/news/depression','forum.news.depression')->name('depression');
    Route::view('/forum/news/harassment','forum.news.harassment')->name('harassment');
    Route::view('/forum/news/single-standard','forum.news.single-standard')->name('single-standard');
    Route::view('/forum/news/stress','forum.news.stress')->name('stress');

Route::view('/forum/cat/abuse','forum.cat.abuse')->name('cat.abuse');
    Route::view('/forum/cat/anxiety','forum.cat.anxiety')->name('cat.anxiety');
    Route::view('/forum/cat/bullying','forum.cat.bul')->name('cat.bul');
    Route::view('/forum/cat/depression','forum.cat.dep')->name('cat.dep');
    Route::view('/forum/cat/drinking','forum.cat.dr')->name('cat.dr');
    Route::view('/forum/cat/eating','forum.cat.eat')->name('cat.eat');
    Route::view('/forum/cat/stress','forum.cat.stress')->name('cat.stress');
    Route::view('/forum/cat/harassment','forum.cat.harass')->name('cat.harass');
    Route::view('/forum/cat/suicide','forum.cat.suicide')->name('cat.suicide');
    Route::view('/specialists','specialists')->name('specialists');


