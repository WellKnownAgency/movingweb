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
Route::get('/pricing', 'PagesController@pricing');
Route::get('/support', 'PagesController@support');
Route::get('/home', 'PagesController@home');
Route::get('/faq', 'PagesController@faq');
//Route::get('/moving-websites', 'PagesController@websites');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/blog', 'PagesController@blogIndex');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'PagesController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');
Route::get('/features', 'PagesController@featureIndex');
Route::get('/features/{slug}', ['as' => 'feature.single', 'uses' => 'PagesController@getSingleFeature' ]) -> where('slug', '[\w\d\-\_]+');
Route::get('sitemap.xml', 'PagesController@sitemap');

//POST
Route::post('contact-us', 'PagesController@postContact');
Route::post('support-ticket', 'PagesController@supportTicket');


//admin panel
Route::prefix('admin')->middleware('auth:web')->group(function() {
  Route::get('/', 'AdminPagesController@index');
  Route::resource('/posts', 'PostController');
  Route::get('/posts/{id}/delete', ['uses' => 'PostController@destroy', 'as' => 'post.delete']);
  Route::post('/posts/{id}','PostController@update');
  Route::resource('features', 'FeatureController');
  Route::post('/features/{id}','FeatureController@update');
  Route::resource('/admin/categories', 'CategoryController');
  Route::post('/categories/{id}','CategoryController@update');
});

Auth::routes();

