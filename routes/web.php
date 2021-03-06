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

Route::get('/my_voucher', ['middleware' => ['std', 'auth'],'uses' => 'ExchangeVoucherController@show']);

Route::get('/my_profile', ['middleware' => ['auth'], function () {
    return view('my-profile');
}]);

Route::get('/my_course', ['middleware' => ['std', 'auth'],'uses' => 'regiscourseController@course','uses' => 'regiscourseController@course']);

Route::get('/courses/{id}', 'courseController@show');

Route::get('/courses', 'courseController@index');

Route::get('/mypoint', ['middleware' => ['std', 'auth'], function () {
    return view('voucher');
}]);

Route::post('updatepromotion', 'PromotionController@update');

Route::post('gencode', 'CodeController@add');

Route::post('checkin', 'CodeController@check');

Route::post('updatelink', 'VdoController@update');

Route::post('addCourse', 'RegisCourseController@add');

Route::get('/admin', ['middleware' => ['admin', 'auth'], 'uses' => 'HomeController@alldata']);

Route::post('addTeacher','TeacherController@update');

Route::post('createCourse','CourseController@create');

Route::post('updatePoint','ExchangeVoucherController@update');
