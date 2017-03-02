<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'HomeController@index')->name("admin");
Route::get('/admin', 'AdminController@index')->name("admin");
ROUTE::get('/product', 'ProductController@index')->name("product"); 
ROUTE::get('/addpro', 'ProductController@add')->name("product");
ROUTE::post('/addpro', 'ProductController@add')->name("product");
ROUTE::get('/detail/{id}', 'ProductController@detail')->name("product");
ROUTE::get('proedit/{id}', 'ProductController@edit')->name("product");
// ROUTE::post('/edit/{id}', 'ProductController@edit')->name("product");
ROUTE::post('/getChild', 'ProductController@getchild')->name("product"); 
ROUTE::post('/proedit/getChild', 'ProductController@getchild')->name("product"); 
ROUTE::post('/proedit/FindasObjectsNoParam', 'ProductController@FindasObjectsNoParam')->name("product");
ROUTE::post('/updatepro/{id}', 'ProductController@update')->name("product");
Auth::routes(); 
Route::get('/home', 'HomeController@index');
ROUTE::get('/category', 'CategoryController@index')->name("category");