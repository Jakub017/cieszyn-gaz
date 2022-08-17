<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

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

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'getHomePage')->name('home');
    Route::get('/instalacje-gazowe', 'getInstallations')->name('installations');
    Route::get('/serwis-lpg', 'getService')->name('service');
    Route::get('/realizacje', 'getRealizations')->name('realizations');
    Route::get('/cennik', 'getPricing')->name('pricing');
    Route::get('/kontakt', 'getContact')->name('contact');
});

Route::controller(ContactController::class)->group(function () {
    Route::post('/kontakt', 'postContact')->name('post.contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
