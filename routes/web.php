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
    return view('welcome');
});

Route::get('/index', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/items', 'PagesController@items');

Route::get('/cart', 'PagesController@cart');

Route::get('/login', 'PagesController@login');

Route::get('/signup', 'PagesController@signup');


Route::get('/profile/{id}/{name}', function($id, $name) {
    return 'This is user ' .$name. ' with an id ' .$id;
});