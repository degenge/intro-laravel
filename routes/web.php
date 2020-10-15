<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/reviews', [ReviewController::class, 'show'])->name('reviews.show');
Route::post('/reviews/store', [ ReviewController::class, 'store' ])->name('reviews.store');
//Route::get('/reviews', 'ReviewController@show')->name('reviews.show');
