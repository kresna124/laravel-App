<?php

/*
|--------------------------------------------------------------------------
| Web Routes\
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PageController@home');

Route::get('/about','PageController@about');

Route::get('/mahasiswa','MahasiswaController@index');



// Route::get('/students','StudentsController@index');
// Route::get('/students/create','StudentsController@create');
// Route::post('/students','StudentsController@store');
// Route::get('/students/{student}','StudentsController@show');
// Route::delete('/students/{student}','StudentsController@destroy');
// Route::get('/students/{student}/edit','StudentsController@edit');
// Route::patch('/students/{student}','StudentsController@update');
 Route::resource('students','StudentsController');