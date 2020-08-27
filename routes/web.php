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

Route::post('/store/submit', 'StoreController@filter')->name('filter');

Route::post('/contact/submit', 'ContactController@message')->name('message');

Route::get('/', 'HomeController@index')->name('homedirect');

Route::get('/admin', 'HomeController@admin', 'ContactController@receive')->
name('admin')->middleware('auth')->middleware('admin');

Route::get('/store', 'PlaneController@receivePlane', function () {
    return view('store');
})->name('store');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
