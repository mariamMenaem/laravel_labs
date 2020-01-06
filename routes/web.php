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

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('posts');
});

Route::group(['middleware' => 'auth'],function(){
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
Route::get('/posts/{post}/edit','PostController@edit')->name('posts.edit');
Route::put('/posts/{post}','PostController@update')->name('posts.update');
Route::delete('/posts/{post}','PostController@destroy')->name('posts.destroy');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
