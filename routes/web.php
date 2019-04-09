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
//


Route::get('/', 'PostsController@index')->name('index_post');
Route::get('/posts/{id}', 'PostsController@show')->name('show_post');
Route::get('/create', 'PostsController@create')->name('create_page');
Route::post('/save', 'PostsController@save')->name('save_page');
Route::get('/category/{id}', 'PostsController@getPostsByCategory')->name('category_posts');
Route::get('/user/{id}', 'PostsController@showByAuthor')->name('authors_posts');

Route::post('/comment/', 'CommentsController@save')->name('save_comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
