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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    
Route::group(['prefix' => 'users',], function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/create','UserController@create')->name('user.create');
   
    Route::post('/store','UserController@store')->name('user.store');
    Route::get('/show','UserController@show')->name('user.show');
    Route::get('/edit','UserController@edit')->name('user.edit');
    Route::get('/delete','UserController@delete')->name('user.delete');
});


Route::group(['prefix' => 'students',], function () {
    Route::get('/', 'StudentController@index')->name('student.index');
    Route::get('/create','StudentController@create')->name('student.create');
    Route::post('/store','StudentController@store')->name('student.store');
    Route::get('/show','StudentController@show')->name('student.show');
    Route::get('/edit','StudentController@edit')->name('student.edit');
    Route::get('/delete','StudentController@delete')->name('student.delete');
});

Route::group(['prefix' => 'teachers',], function () {
    Route::get('/', 'TeacherController@index')->name('teacher.index');
    Route::get('/create','TeacherController@create')->name('teacher.create');
    Route::post('/store','TeacherController@store')->name('teacher.store');
    Route::get('/show','TeacherController@show')->name('teacher.show');
    Route::get('/edit','TeacherController@edit')->name('teacher.edit');
    Route::get('/delete','TeacherController@delete')->name('teacher.delete');
});
});
   



require __DIR__.'/auth.php';
