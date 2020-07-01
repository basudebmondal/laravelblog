<?php

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Route::get('/todos', 'TodoController@index')->name('todo.list');

Route::get('/todos/create', 'TodoController@create');

Route::post('/todos/create', 'TodoController@store');

Route::get('/todos/{todo}/edit', 'TodoController@edit');

Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

Route::delete('/todos/{todo}/delete', 'TodoController@destroy')->name('todo.delete');

Route::post('/todos/{todo}/complete', 'TodoController@complete');