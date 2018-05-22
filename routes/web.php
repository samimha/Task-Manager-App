<?php

Use App\Task;

//Uses controller
//All tasks
Route::get('/tasks','TaskController@index');
//A specific task
Route::get('/tasks{task}','TaskController@show');  //wildcard {task}
//Create a new task
Route::get('/createtask', 'TaskController@create');
//Save the new task
Route::post('/tasks', 'TaskController@store');
//Delete a specific task
Route::delete('/tasks/{task}/delete','TaskController@destroy');
//Complete a specific task
Route::patch('/tasks/{task}', 'TaskController@update');

//Registration
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

//Session
Route::get('/login','SessionController@create');
Route::post('/login','SessionController@store');
Route::get('/logout','SessionController@destroy');


//Doesn't use controller
//Welcome
Route::get('/', function () {

    return view('welcome', [
        'name' => 'World'
    ]);

})->name('home');

//Blog
Route::get('/blog', function() {

    return view('blog');

});

//About
Route::get('/about', function() {

    return view('about');

});







