<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('nosotros/', 'AboutUsController@index')->name('about');

Route::get('contacto/', 'ContactUsController@index')->name('contact');

Route::post('sendmail', 'ContactUsController@sendmail')->name('sendmail');

Route::get('productos/{category}', 'ProductController@index')->name('product.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
