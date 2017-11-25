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


Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');

Route::get('/project1','LoginSystemController@project1');
Route::get('/register','LoginSystemController@register');
Route::post('/project1','LoginSystemController@store');
Route::post('/userInfo','LoginSystemController@show');

