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


Route :: view('/',"welcome");
Route :: view ('/register',"register");
Route :: post ('/store',"RegisterController@store");



Route :: get('/user','UserController@index');
Route :: get('/user/add','UserController@addForm');

Route::get('/product', 'ProductController@index'); // list of products
Route::get('/product/{id}/edit', 'ProductController@editForm'); // edit  product
Route::post('/product/{id}/edit', 'ProductController@saveEdit');
Route::get('/product/add', 'ProductController@addForm'); // show form
Route::post('/product/add', 'ProductController@postAdd'); // save data when submit form / handler

Route::post('/product/delete', 'ProductController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
