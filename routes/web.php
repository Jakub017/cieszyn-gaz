<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'getHomePage'])->name('home');
Route::get('/instalacje-gazowe', [PagesController::class, 'getInstallations'])->name('installations');
Route::get('/serwis-lpg', [PagesController::class, 'getService'])->name('service');
Route::get('/realizacje', [PagesController::class, 'getRealizations'])->name('realizations');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
