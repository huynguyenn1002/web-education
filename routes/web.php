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

Route::middleware(['teacher'])->namespace('teacher')->as('teacher.')->group(function (){
    Route::resource('/course', 'CourseController');
    Route::resource('/thematic', 'ThematicController');
    Route::resource('/question', 'QuestionController');
    Route::get('/test', 'QuestionController@makeTest')->name('teacher.question.test');
});
