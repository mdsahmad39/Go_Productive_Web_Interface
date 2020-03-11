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
    return view('index');
});

Route::get('/dashboard', 'DashboardController@index');

Route::resource('tasks', 'TasksController');

Route::resource('events', 'EventController');

Route::resource('meds', 'MedController');

Route::get('/tasks', 'TasksController@index');

Route::get('/show', 'TaskController@index');

Route::get('/eventsshow', 'EventsController@index');

Route::get('/events', 'EventController@index');

Route::get('/medsshow', 'MedsController@index');

Route::get('/health', 'MedController@index');

Route::get('/weather', function () {
    return view('weather');
});

Route::get('/qoute', function () {
    return view('qoute');
});
