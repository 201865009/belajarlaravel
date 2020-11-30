<?php

Route::get('/', 'StudentsController@index');


// Students

//tampilin route cara 1
//Route::get('/students', 'StudentsController@index');
//Route::get('/students/create', 'StudentsController@create');
//Route::get('/students/{student}', 'StudentsController@show');
//Route::post('/students', 'StudentsController@store');
//Route::delete('/students/{student}', 'StudentsController@destroy');
//Route::get('/students/{student}/edit', 'StudentsController@edit');
//Route::patch('/students/{student}', 'StudentsController@update');

//tampilin route cara 2
Route::resource('students','StudentsController');