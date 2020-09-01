<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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

Route::get('/', 'PostController@index')->name('show.home');
Route::get('/savedata', 'PostController@savedata')->name('detali.hardandsoft');
Route::get('/clocktimes', 'PostController@clocktime')->name('detali.clocktime');
Route::get('/booking', 'PostController@booking')->name('detali.booking');
Route::get('/shop', 'PostController@shop')->name('detali.shop');
Route::get('/dowload', 'PostController@dowload')->name('detali.cv');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

 });
 Route::get('/foo', function () {
     Artisan::call('storage:link');
    return "linked!";

 });
