<?php

use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

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

/*
FRONTEND
*/
Route::get('/','PublicController@index')->name('post.index');

Route::get('/post/show/{shop}','PublicController@show')->name('post.show');
Route::get('/category/show/{category}','PublicController@category')->name('category.show');

/*
AUTH
*/
Auth::routes();


/*
BACKEND
*/
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function(){
    Route::get('/post', 'PostController@index')->name('post');
    Route::get('/post/create', 'PostController@create')->name('post.create');
    Route::post('/post/store', 'PostController@store')->name('post.store');
    Route::get('/post/edit/{shop}', 'PostController@edit')->name('post.edit');
    Route::patch('/post/update/{shop}', 'PostController@update')->name('post.update');
    Route::delete('/post/destroy/{shop}', 'PostController@destroy')->name('post.destroy');
});

