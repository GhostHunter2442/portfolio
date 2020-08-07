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
Route::get('dowload', function () {
    
    $file= public_path(). "/images/Resume.jpg";

    $headers = array(
              'Content-Type: application/img',
            );

    return Response::download($file, 'Resume.jpg', $headers);
})->name('detali.cv');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
