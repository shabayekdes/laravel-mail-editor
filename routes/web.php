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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/app/{path}', 'HomeController@mails')->where('path', '([A-z\d-\/_.]+)?');

Route::get('api/templates', 'TemplateController@index');
Route::post('api/template/store', 'TemplateController@store');
Route::get('api/template/{template}/show', 'TemplateController@show');
Route::put('api/template/{template}/update', 'TemplateController@update');

Route::post('api/template/create', 'TemplateController@send');
