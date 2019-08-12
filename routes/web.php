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
Route::get('admin/signin', 'UserController@getSignInAdmin');
Route::post('admin/signin', 'UserController@postSignInAdmin');
Route::get('admin/signout', 'UserController@SignOutAdmin');
Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function (){

    Route::get('admin/homepage', function (){
        return view('admin.homepage');
    })->name('adminHomepage');

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

    Route::group(['prefix'=>'slide'],function() {
        Route::get('list', 'SlideController@getList');
        Route::get('add', 'SlideController@getAdd');
        Route::post('add', 'SlideController@postAdd');
        Route::get('update/{id}', 'SlideController@getUpdate');
        Route::post('update/{id}', 'SlideController@postUpdate');
        Route::get('delete/{id}', 'SlideController@getDelete');
    });

    Route::group(['prefix'=>'bill'],function() {
        Route::get('list', 'BillController@getList');
    });

    Route::group(['prefix'=>'billdetail'],function() {
        Route::get('list', 'BillDetailController@getList');
    });

    Route::group(['prefix'=>'customer'],function() {
        Route::get('list', 'CustomerController@getList');
    });

    Route::group(['prefix'=>'employee'],function() {
        Route::get('list', 'EmployeeController@getList');
        Route::get('add', 'EmployeeController@getAdd');
        Route::post('add', 'EmployeeController@postAdd');
        Route::get('update/{id}', 'EmployeeController@getUpdate');
        Route::post('update/{id}', 'EmployeeController@postUpdate');
        Route::get('delete/{id}', 'EmployeeController@getDelete')->name('deleteEmployee');
    });

    Route::group(['prefix'=>'ajax'],function (){
       Route::post('typeProduct', 'AjaxController@getTypeProduct')->name('getTypeProduct');
       Route::post('updateProduct', 'AjaxController@updateProduct')->name('updateProduct');
       Route::post('deleteEmployee', 'AjaxController@deleteEmployee')->name('deleteEmployee');
    });
});
