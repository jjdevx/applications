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
Auth::routes();  
Route::group(['middleware' => 'auth'], function() {
//Clear Cache facade value:

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');  
    $breadcrumb=array('title'=>'dashboard','home'=>'home','type'=>'schedule','action'=>'infos');
    $label['data']='admin';
    return view('home.index',array('label'=>$label,'breadcrumb'=>$breadcrumb));
    // return what you want
}); 

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Clear Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/home', 'HomeController@index');
Route::get('/category', 'CategoryController@index');
Route::get('/', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/product', 'ProductController@index'); 
Route::get('/addpro', 'ProductController@add');
Route::post('/addpro', 'ProductController@add');
Route::get('detail/{id}', 'ProductController@detail');
Route::get('proedit/{id}', 'ProductController@edit');
// ROUTE::post('/edit/{id}', 'ProductController@edit');
Route::post('/getChild', 'ProductController@getchild'); 
Route::post('/proedit/getChild', 'ProductController@getchild'); 
Route::post('/proedit/FindasObjectsNoParam', 'ProductController@FindasObjectsNoParam');
Route::post('/updatepro/{id}', 'ProductController@update');
Route::delete('/destroy/{id}', 'ProductController@destroy');
Route::group(['prefix' => 'users'], function() {     
    Route::get('',['as'=>'user.list','uses' => 'CustomUserController@index']);
    Route::get('/edit/{user}',['as'=>'user.edit','uses' => 'CustomUserController@edit']);
    Route::get('/info/{user}',['as'=>'user.info','uses' => 'CustomUserController@info']);
    Route::get('create',['as'=>'user.create','uses' => 'CustomUserController@create']);
    Route::post('',['as'=>'user.save','uses' => 'CustomUserController@save']); 
    Route::delete('/del/{user}',['as'=>'user.delete','uses' => 'CustomUserController@destroy']);
}); 
}); 