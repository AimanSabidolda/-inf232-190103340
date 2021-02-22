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

Route::get('/test', function () {
    return view('new');
});
Route::get('/post/{id}',"StudentController@name_of_student");
Route::get('/post1/{id}',"StudentController@age");
Route::get('/post2/{id}',"StudentController@date");



