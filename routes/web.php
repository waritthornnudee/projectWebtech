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
    return view('contact');
});

Auth::routes();

Route::get('/home', ['middleware' => 'auth', function(){
    return view('home');
}]);

Route::get('/mypoint', function () {
    return view('voucher');
});

Route::get('/admin', ['middleware' => ['admin', 'auth'], function () {
    return view('admin');
}]);
