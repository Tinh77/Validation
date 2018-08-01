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
use App\Category;

Route::resource('admin/product', 'ProductController');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/article', 'ArticleController');
Route::resource('admin/blog', 'BlogController');