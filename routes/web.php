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

Route::get('/', function () {
    return redirect(route('home'));
});
Route::get('/dashboard', function () {
    return redirect(route('users.index'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('colors', 'ColorController');

Route::resource('clothes', 'ClothesController');

Route::post('/clothes/uploade', 'ClothesController@uploade')->name('clothes.uploade');

Route::resource('users', 'UsersController');

Route::resource('prints', 'PrintsController');

Route::post('/uploade','PrintsController@uploade')->name('uploade');