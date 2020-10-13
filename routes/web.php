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

Route::post('/filter/submit', 'PlaneController@filteredPlanes')->name('filter');

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

Route::get('/deleting/{id}', 'PlaneController@planeDelete')->name('plane-delete')->middleware('admin');

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cartAndBuy', 'PlaneController@cartAndBuy')->name('cartAndBuy');

Route::post('/update/{id}', 'PlaneController@updateAPlane')->name('updateplane')->middleware('admin');

Route::get('/delete/{id}', 'ContactController@messageDelete')->name('message-delete');

Route::post('/onlyOne/submit', 'PlaneController@toCart')->name('toCart');

Route::post('/cartAndBuy/submit', 'PlaneController@updateCartItem')->name('updateCartItem');

Route::post('/del/submit', 'PlaneController@deleteCartItem')->name('deleteCartItem');

Route::post('/clca/submit', 'PlaneController@clearCart')->name('clearCart');

Route::post('/cart/submit', 'OrderController@addAnOrder')->name('addAnOrder');

Route::get('/ordersAdmin', 'OrderController@getAllOrders')->
name('adminOrder')->middleware('auth')->middleware('admin');

Route::post('/ordersUser/submit', 'OrderController@userOrders')->
name('userOrder')->middleware('auth');

Route::post('/deleteOrder/submit', 'OrderController@deleteOrder')->name('deleteOrder');

Route::post('/updateAnOrder/submit', 'OrderController@updateAnOrder')->name('updateAnOrder');

Route::post('/comment/submit', 'CommentController@comment')->name('comment');

Route::post('/deleteComment/submit', 'CommentController@deleteComment')->name('deleteComment');
