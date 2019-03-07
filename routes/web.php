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



Route::get('/', 'PagesController@getIndex');
Route::get('blog', 'PagesController@blogIndex');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'PagesController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');




//admin panel
  Route::get('/admin', 'AdminPagesController@index');
  Route::resource('/admin/posts', 'PostController');
  Route::get('/admin/posts/{id}/delete', ['uses' => 'PostController@destroy', 'as' => 'post.delete']);
  Route::post('/posts/{id}','PostController@update');
