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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'], function (){
    Route::get('homepage', function (){
        return view('admin.homepage');
    });
    Route::group(['prefix'=>'wholeproduct'],function() {
        Route::get('list', 'WholeProductController@getList');
        Route::get('add', 'WholeProductController@getAdd');
        Route::post('add', 'WholeProductController@postAdd');
        Route::get('update/{id}', 'WholeProductController@getUpdate');
        Route::post('update/{id}', 'WholeProductController@postUpdate');
        Route::get('delete/{id}', 'WholeProductController@getDelete');
    });
    Route::group(['prefix'=>'typeproduct'],function() {
        Route::get('list', 'TypeProductController@getList');
        Route::get('add', 'TypeProductController@getAdd');
        Route::post('add', 'TypeProductController@postAdd');
        Route::get('update/{id}', 'TypeProductController@getUpdate');
        Route::post('update/{id}', 'TypeProductController@postUpdate');
        Route::get('delete/{id}', 'TypeProductController@getDelete');
    });
    Route::group(['prefix'=>'product'],function() {
        Route::get('list', 'ProductController@getList');
        Route::get('add', 'ProductController@getAdd');
        Route::post('add', 'ProductController@postAdd');
        Route::get('update/{id}', 'ProductController@getUpdate');
        Route::post('update/{id}', 'ProductController@postUpdate');
        Route::get('delete/{id}', 'ProductController@getDelete');
    });
    Route::group(['prefix'=>'ajax'],function (){
       Route::post('typeProduct', 'AjaxController@getTypeProduct')->name('getTypeProduct');
    });
});
