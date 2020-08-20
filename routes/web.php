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

// Route::get('/store', function () {
//     return view('store');
// })->name('store');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');


Route::get('/add', function () {
    return view('add');
})->name('add');

Route::post('/add/submit', 'PlaneController@adding')->name('adding');

Route::post('/store/submit', 'StoreController@filter')->name('filter');

Route::post('/contact/submit', 'ContactController@message')->name('message');

Route::get('/', 'HomeController@index')->name('homedirect');

Route::get('/contact/all', 'ContactController@receive')->name('contactreceive');

Route::get('/store', 'PlaneController@receivePlane', function () {
    return view('store');
})->name('store');

// Route::get('/store', 'StoreController@receiver', function () {
//     return view('store');
// })->name('storeGo');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
