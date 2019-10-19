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


Auth::routes();

Route::get('/email',function(){
    return new App\mail\NewUserWelcome();
});

Route::get('/','PostsController@index');
Route::post('follow/{user}','FollowsController@store');

Route::get('/post/create','PostsController@create');
Route::post('/post','PostsController@store');
Route::get('/post/{post}','PostsController@show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
