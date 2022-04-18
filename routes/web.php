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
    
    Route::group(['prefix' => '{user}'], function () {
        Route::get('/show','UserController@show')->name('user.show');
        Route::get('/edit','UserController@edit')->name('user.edit');
        Route::patch('/','UserController@update')->name('user.update');
        Route::get('/delete','UserController@delete')->name('user.delete');
        Route::delete('/','UserController@destroy')->name('user.destroy');
    
    });
    
});

    Route::group(['prefix' => 'teachers',], function () {
        Route::get('/', 'TeacherController@index')->name('teacher.index');

        Route::group(['prefix' => '{teacher}'], function () {
        Route::get('/show','TeacherController@show')->name('teacher.show');
        Route::get('/edit','TeacherController@edit')->name('teacher.edit');
        Route::patch('/','TeacherController@update')->name('teacher.update');
        Route::get('/delete','TeacherController@delete')->name('teacher.delete');
        Route::delete('/','TeacherController@destroy')->name('teacher.destroy');
});
  
    
});
Route::group(['prefix' => 'student',], function () {
   
    Route::get('/', 'StudentController@gindex')->name('student.gindex');
    Route::get('/students/{grade_section?}', 'StudentController@sindex')->name('student.sindex');
    Route::get('/create','StudentController@create')->name('student.create');
    Route::post('/store','StudentController@store')->name('student.store');

    Route::group(['prefix' => '{student}'], function () {
        
    Route::get('/show','StudentController@show')->name('student.show');
    Route::get('/edit','StudentController@edit')->name('student.edit');
    Route::patch('/','StudentController@update')->name('student.update');
    Route::get('/delete','StudentController@delete')->name('student.delete');
    Route::delete('/','StudentController@destroy')->name('student.destroy');
});
});

Route::group(['prefix' =>'grade',], function () {
    Route::get('/', 'GradeController@index')->name('grade.index');
});


Route::group(['prefix' =>'subject',], function () {
    Route::get('/', 'SubjectController@index')->name('subject.index');
    Route::get('/create','SubjectController@create')->name('subject.create');
    Route::post('/store','SubjectController@store')->name('subject.store');
    
    Route::group(['prefix' => '{subject}'], function () {
        Route::get('/', 'TopicController@index')->name('topic.index');
        Route::get('/topiccreate','TopicController@create')->name('topic.create');
        Route::get('/subtopic','SubtopicController@index')->name('subtopic.index');
        Route::get('/subtopiccreate','SubtopicController@create')->name('subtopic.create');
        Route::post('/topicstore','TopicController@store')->name('topic.store');
    
        Route::get('/topicedit','TopicController@edit')->name('topic.edit');
        Route::get('/topicdelete','TopicController@delete')->name('topic.delete');
        Route::delete('/topic','TopicController@destroy')->name('topic.destroy');

        Route::get('/edit','SubjectController@edit')->name('subject.edit');
        Route::patch('/','StudentController@update')->name('subject.update');
        Route::get('/delete','SubjectController@delete')->name('subject.delete');
        Route::delete('/','SubjectController@destroy')->name('subject.destroy');
    });
});



   


Route::group(['prefix' =>'exam',], function () {
    Route::get('/', 'ExamController@index')->name('exam.index');
});
Route::group(['prefix' =>'assiegnment',], function () {
    Route::get('/', 'AssiegnmentController@index')->name('assiegnment.index');
});
});
   



require __DIR__.'/auth.php';
