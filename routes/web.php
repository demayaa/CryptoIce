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

Route::get('/', 'PostinganController@welcome');
Route::get('/posts/{slug}', 'PostinganController@posts');
Route::get('/posts/category/{category}', 'PostinganController@category');
Route::post('/posts/comment', 'CommentController@send');
Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::get('/admin/profile', 'HomeController@profil')->name('profil');
/* Route Postingan */
Route::get('/admin/list-postingan', 'HomeController@list_postingan')->name('list-postingan');

Route::get('/admin/add-postingan', 'PostinganController@index')->name('add-postingan');

Route::post('/admin/add-postingan', 'PostinganController@add_postingan')->name('add-postingan');

Route::get('/admin/hapus-postingan/{id}', 'PostinganController@hapus');
/* Route Category */

Route::get('/admin/list-category', 'HomeController@list_category')->name('list-category');

Route::get('/admin/add-category', 'CategoryController@index')->name('add-category');

Route::post('/admin/add-category', 'CategoryController@add_category')->name('add-category');

Route::get('/admin/hapus-category/{id}', 'CategoryController@hapus');
Route::get('/category', 'CategoryController@loadData');

/* Route Tags*/
Route::get('/admin/list-tags', 'HomeController@list_tags')->name('list-tags');

Route::get('/admin/add-tags', 'TagsController@index')->name('list-tags');

Route::post('/admin/add-tags', 'TagsController@add_tags')->name('list-tags');

Route::get('/admin/hapus-tags/{id}', 'TagsController@hapus');

/* FeedBack */

Route::post('/feedback', 'FeedbackController@send');
Route::get('/admin/massage', 'FeedbackController@index');

Route::get('/about', 'WebsiteController@about');
Route::get('/contact', 'WebsiteController@contact');
Route::get('/team', 'WebsiteController@team');

/* Team */

Route::get('/admin/team-list', 'HomeController@team');
Route::get('/admin/add-team', 'HomeController@add_team');
Route::post('/admin/add_team/post', 'HomeController@add_team_post');
Route::get('/admin/hapus-team/{id}', 'HomeController@hapus_team');