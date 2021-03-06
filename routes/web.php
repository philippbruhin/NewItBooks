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

View::share('blog', App\Blog::all());

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/blog/bin', 'BlogController@bin');
Route::get('/blog/bin/{id}/restore', 'BlogController@restore');
Route::delete('/blog/bin/{id}/destroyblog', 'BlogController@destroyBlog');

Route::get('/blog', 'BlogController@index');

Route::get('/blog/create', 'BlogController@create');

Route::post('/blog/store', 'BlogController@store');
Route::patch('/blog/{id}', 'BlogController@update');
Route::delete('/blog/{id}', 'BlogController@destroy');

Route::get('/blog/{id}', 'BlogController@show');
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::patch('/blog/{id}', 'BlogController@publish');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index');

Route::resource('categories', 'CategoryController');
Route::resource('media', 'PhotosController');


Route::resource('users', 'UserController');
