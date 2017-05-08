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
Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/my_course', function () {
    return view('mycourse');
});

Route::get('/mypoint', ['middleware' => ['std', 'auth'], function () {
    return view('voucher');
}]);

Route::post('updatepromotion', 'PromotionController@update');

Route::post('updatelink', 'VdoController@update');

Route::post('addCourse', 'RegisCourseController@add');

Route::get('/admin', ['middleware' => ['admin', 'auth'], function () {
    return view('admin');
}]);

Route::post('addTeacher','TeacherController@add');

Route::post('createCourse','CourseController@create');
