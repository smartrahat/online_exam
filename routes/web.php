<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/** Teachers */
Route::get('teachers','TeacherController@index');
Route::get('teacher/create','TeacherController@create');
Route::post('teacher/store','TeacherController@store');
Route::get('teacher/show/{id}','TeacherController@show');
Route::get('teacher/edit/{id}','TeacherController@edit');
Route::patch('teacher/{id}/update','TeacherController@update');
Route::delete('teacher/destroy/{id}','TeacherController@destroy');

/** Students */
Route::get('students','StudentController@index');
Route::get('students/create','StudentController@create');
Route::post('students/store','StudentController@store');
Route::get('students/edit/{id}','StudentController@edit');
Route::patch('students/{id}/update','StudentController@update');
Route::delete('students/destroy/{id}','StudentController@destroy');

/** Departments */
Route::get('departments','DepartmentController@index');
Route::post('department/store','DepartmentController@store');
Route::delete('department/destroy/{id}','DepartmentController@destroy');

/** Subjects */
Route::get('subjects','SubjectController@index');
Route::post('subject/store','SubjectController@store');
Route::delete('subject/destroy/{id}','SubjectController@destroy');