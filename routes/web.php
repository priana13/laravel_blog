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

Route::get('/table',function(){
    return view('sample.table');
});


// Post
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/{nama}', 'HomeController@user');
Route::resource('post','PostController');
Route::post('post/{id}/update','PostController@update')->name('updatepost');


Route::get('/{slug}','PostController@show');


// Testing Route

Route::get('/tes/form',function(){
    return view('sample.form');
});



