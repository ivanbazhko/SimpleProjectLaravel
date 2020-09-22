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

Route::get('/store/{id}', 'Planecontroller@onlyOne')->name('onlyOne');

Route::get('/store/{id}', 'Planecontroller@update')->name('update');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
