<?php

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
    return view('home');
})->name('show.home');
Route::get('savedata', function () {
    return view('savedata');
})->name('detali.hardandsoft');
Route::get('clocktime', function () {
    return view('clocktime');
})->name('detali.clocktime');
Route::get('shop', function () {
    return view('shop');
})->name('detali.shop');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
