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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['teacher'])->namespace('Teacher')->as('teacher.')->group(function (){
    Route::resource('/course', 'CourseController');
    Route::resource('/thematic', 'ThematicController');
    Route::resource('/question', 'QuestionController');
    Route::get('/test/create', 'QuestionController@showForm')->name('question.form.create');
    Route::post('/test', 'QuestionController@makeTest')->name('question.form.store');
    Route::resource('/exam', 'ExamController');
});
