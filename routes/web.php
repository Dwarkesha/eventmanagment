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


Route::get('/','App\Http\Controllers\EventController@Show');
Route::get('addevent','App\Http\Controllers\EventController@view');
Route::post('storeevent','App\Http\Controllers\EventController@storeevent');
Route::get('eventview/{id}','App\Http\Controllers\EventController@event');
