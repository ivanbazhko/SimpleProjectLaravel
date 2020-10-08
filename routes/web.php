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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/tologin', function () {
    return view('auth.login');
})->name('tologin');

Route::get('/toreg', function () {
    return view('auth.register');
})->name('toreg');

Route::post('/admin/submit', 'PlaneController@adding')->name('adding');

Route::post('/store/submit', 'PlaneController@filteredPlanes')->name('filter');

Route::post('/contact/submit', 'ContactController@message')->name('message');

Route::get('/', 'HomeController@index')->name('homedirect');

Route::get('/admin', 'ContactController@receive')->
name('admin')->middleware('auth')->middleware('admin');

Route::get('/store', 'PlaneController@filteredPlanes', function () {
    return view('store');
})->name('store');

Route::get('/onlyOne/{id}', 'PlaneController@onlyOne')->name('onlyOne');

Route::get('/oneMess/{id}', 'ContactController@oneMess')->name('oneMess')->middleware('admin');

Route::get('/update/{id}', 'PlaneController@update')->name('update')->middleware('admin');

Route::get('/delete/{id}', 'PlaneController@planeDelete')->name('plane-delete')->middleware('admin');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/update/{id}', 'PlaneController@updateAPlane')->name('updateplane')->middleware('admin');

Route::get('/cartAndBuy', function () {
    return view('cartAndBuy');
})->name('cartAndBuy');

Route::get('/delete/{id}', 'ContactController@messageDelete')->name('message-delete');
