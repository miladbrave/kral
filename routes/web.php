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


Route::get('/','pageController@index');
Route::get('home','pageController@home');
Route::get('gallery','pageController@gallery');
Route::get('product','pageController@product');
Route::get('shop','pageController@shop');
Route::get('about','pageController@about');
Route::get('contact','pageController@contact');
Route::get('test','pageController@test');

Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
