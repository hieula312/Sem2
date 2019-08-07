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
    Route::get('trangchu', function (){
        return view('trangchu');
    });
    Route::group(['prefix'=>'typeproduct'],function() {
        Route::get('list', 'TypeProductController@getList');
        Route::get('add', 'TypeProductController@getAdd');
        Route::post('add', 'TypeProductController@postAdd');
        Route::get('update/{id}', 'TypeProductController@getUpdate');
        Route::post('update/{id}', 'TypeProductController@postUpdate');
        Route::get('delete/{id}', 'TypeProductController@getDelete');
    });
});
