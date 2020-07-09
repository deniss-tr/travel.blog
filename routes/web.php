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
Route::get('/', 'PageController@index');
Route::get('/gallery', 'PageController@gallery');
Route::post('/newcontact', 'PageController@newContact');
Route::post('/newsub', 'PageController@newSub');
Route::get('/posts', 'ArticleController@posts');
Route::get('/posts/new', 'ArticleController@newpost');
Route::get('/myposts', 'ArticleController@myPosts');
Route::get('/posts/category/{category}', 'ArticleController@categoryPosts');
Route::get('/posts/archive/{month}', 'ArticleController@archivePosts');
Route::get('/posts/{id}', 'ArticleController@post');
Route::get('/posts/{id}/edit', 'ArticleController@edit');
Route::patch('/posts/{id}', 'ArticleController@postUpdate');
Route::delete('/posts/{id}', 'ArticleController@destroy');
Route::post('/posts/new', 'ArticleController@addpost');
Route::post('/comments', 'CommentController@addComment');
Route::post('/likes', 'ArticleController@changeLike');
Route::get('/signin', 'PageController@signin');
Route::get('/signup', 'PageController@signup');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'PageController@index');