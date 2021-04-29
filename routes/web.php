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

Route::get('/seed', function(\App\Post $post){
    
    $faker = Faker\Factory::create();

    foreach (range(1,45) as $x) {

       $post->create([
           'title' => $faker->sentence(5),
           'slug' =>$faker->sentence(3),
           'category_id' => 2,
           'desc' => $faker->sentence(1000)
       ]);
    }
});



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/table',function(){
    return view('sample.table');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/{nama}', 'HomeController@user');
Route::resource('post','PostController');
Route::get('/{slug}','PostController@show');





