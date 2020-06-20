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
    return redirect()->to('/tasks');
});

Route::post('/login', 'AuthController@login');
Route::get('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
Route::get('/register', 'AuthController@register');
Route::get('/logout', 'AuthController@logout');

Route::get('/tasks', 'TaskController@index')->middleware('login');
Route::get('/tasks/add', 'TaskController@add')->middleware('login');
Route::post('/tasks/add', 'TaskController@add')->middleware('login');
Route::get('/tasks/{id}/edit', 'TaskController@edit')->middleware('login');
Route::post('/tasks/{id}/edit', 'TaskController@edit')->middleware('login');
Route::get('/tasks/{id}/delete', 'TaskController@delete')->middleware('login');
