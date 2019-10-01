<?php

use App\blog;
use App\galeri;
use App\kategori;

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

Route::get('/', function () {
	$blog = blog::all();
	$miniGaleri = galeri::take(6)->get();
	$galeri = galeri::all();
	$kategori = kategori::all();
    return view('landing',compact('blog','galeri','kategori','miniGaleri'));
})->name('landing');

Auth::routes();
// Route::get('/blog','blog\blogController@index')->name('blog');
Route::group(['namespace'=>'blog','prefix'=>'blog'],function(){
	Route::get('/','blogController@index')->name('blog');
	Route::post('/create-category','blogController@createCategory')->name('blog-create-category');
	Route::post('/update-category','blogController@updateCategory')->name('blog-edit-category');
	Route::delete('/delete-category/{id}','blogController@deleteCategory')->name('blog-delete-category');
	Route::post('/create-post','blogController@createPost')->name('blog-create-post');
	Route::post('/update-post','blogController@updatePost')->name('blog-edit-post');
	Route::delete('/delete-post/{id}','blogController@deletePost')->name('blog-delete-post');
	Route::get('/detail/{id}','blogController@detailBlog')->name('blog-detail');
});

Route::group(['namespace'=>'galeri','prefix'=>'galeri'],function(){
	Route::get('/','galeriController@index')->name('galeri');
	Route::post('/create-category','galeriController@createCategory')->name('galeri-create-category');
	Route::post('/create-galeri','galeriController@createGaleri')->name('galeri-create-post');
});
Route::get('/home', 'HomeController@index')->name('home');
