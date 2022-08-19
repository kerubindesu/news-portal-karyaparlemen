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

// Route Laman Kosong & More
Route::get('kosong', 'App\Http\Controllers\PagesController@laman_kosong');
Route::get('more bantuan', 'App\Http\Controllers\PagesController@bantuan');
Route::get('more kkp', 'App\Http\Controllers\PagesController@kkp');
Route::get('more pkp', 'App\Http\Controllers\PagesController@pkp');
Route::get('more pms', 'App\Http\Controllers\PagesController@pms');
Route::get('more ppa', 'App\Http\Controllers\PagesController@ppa');
Route::get('more iklanmore', 'App\Http\Controllers\PagesController@iklanmore');

//route-auth
// Login
Route::get('login', 'App\Http\Controllers\LoginController@lamanlogin')->name('login');
Route::post('postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', 'App\Http\Controllers\PagesController@admin');
    Route::resource('contents', 'App\Http\Controllers\ContentsController');
    Route::resource('ads', 'App\Http\Controllers\AdsController');
    Route::resource('photos', 'App\Http\Controllers\PhotosController');
    Route::get('user', 'App\Http\Controllers\UserController@index');
    Route::get('cari', 'App\Http\Controllers\ContentsController@cari');
    Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
});

// Route::get('/user', 'App\Http\Controllers\UserController@index');

// Public Route
Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('index', 'App\Http\Controllers\PagesController@index');
Route::get('article/{content}', 'App\Http\Controllers\PagesController@article');
Route::get('categories/{item}', 'App\Http\Controllers\PagesController@categories');
Route::get('caripublic', 'App\Http\Controllers\PagesController@caripublic');

