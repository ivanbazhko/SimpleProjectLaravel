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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/store', function () {
    return view('store');
})->name('store');

Route::post('/contact/submit', 'ContactController@message')->name('message');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/log', function () {
    return view('auth.login');
});

Route::get('/reg', function () {
    return view('auth.register');
});

Route::post('/register/submit', function () {
    return view('contact');
})->name('register');

Route::post('/login/submit', function () {
    return view('contact');
})->name('login');

// Route::get('/register', function () {
//     return view('register');
// });

// Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);
