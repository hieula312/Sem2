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


Route::fallback(function(){
    return response()->view('404', [], 404);
});
//ADMIN
Route::get('admin/signin', 'UserController@getSignInAdmin');
Route::post('admin/signin', 'UserController@postSignInAdmin');
Route::get('admin/signout', 'UserController@SignOutAdmin');

Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function (){

    Route::get('homepage', function (){
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
    Route::group(['prefix'=>'deliverytype'],function() {
        Route::get('list', 'DeliveryTypeController@getList');
        Route::get('add', 'DeliveryTypeController@getAdd');
        Route::post('add', 'DeliveryTypeController@postAdd');
        Route::get('update/{id}', 'DeliveryTypeController@getUpdate');
        Route::post('update/{id}', 'DeliveryTypeController@postUpdate');
        Route::get('delete/{id}', 'DeliveryTypeController@getDelete');
    });

    Route::group(['prefix'=>'city'],function() {
        Route::get('list', 'CityController@getList');
        Route::get('add', 'CityController@getAdd');
        Route::post('add', 'CityController@postAdd');
        Route::get('update/{id}', 'CityController@getUpdate');
        Route::post('update/{id}', 'CityController@postUpdate');
        Route::get('delete/{id}', 'CityController@getDelete');
    });

    Route::group(['prefix'=>'district'],function() {
        Route::get('list', 'DistrictController@getList');
        Route::get('add', 'DistrictController@getAdd');
        Route::post('add', 'DistrictController@postAdd');
        Route::get('update/{id}', 'DistrictController@getUpdate');
        Route::post('update/{id}', 'DistrictController@postUpdate');
        Route::get('delete/{id}', 'DistrictController@getDelete');
    });

    Route::group(['prefix'=>'subdistrict'],function() {
        Route::get('list', 'SubDistrictController@getList');
        Route::get('add', 'SubDistrictController@getAdd');
        Route::post('add', 'SubDistrictController@postAdd');
        Route::get('update/{id}', 'SubDistrictController@getUpdate');
        Route::post('update/{id}', 'SubDistrictController@postUpdate');
        Route::get('delete/{id}', 'SubDistrictController@getDelete');
    });

    Route::group(['prefix'=>'bill'],function() {
        Route::get('list', 'BillController@getList');
    });

    Route::group(['prefix'=>'billdetail'],function() {
        Route::get('list', 'BillDetailController@getList');
    });

    Route::group(['prefix'=>'customer'],function() {
        Route::get('list', 'UserController@getListCustomer');
        Route::get('follower', 'UserController@getFollower');
        Route::get('listMail', 'UserController@getListMail');
        Route::get('sendMail', 'UserController@getsendMail');
        Route::post('sendMail', 'UserController@postsendMail');
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
       Route::post('district', 'AjaxController@getDistrictAd')->name('getDistrictAd');
       Route::post('deleteProduct', 'AjaxController@deleteProduct')->name('deleteProduct');
       Route::post('deleteEmployee', 'AjaxController@deleteEmployee')->name('deleteEmployee');
    });
});

//CLIENT
Route::get('homepage', 'PageController@getHomepage');
Route::get('typeProduct/{id}', 'PageController@getTypeProductPage');
Route::get('product/{id}', 'PageController@getProductDetail');
Route::post('addCart', 'AjaxController@postAddCart')->name('addCart');
Route::post('checkNumProduct', 'AjaxController@postCheckNumProduct')->name('checkNumProduct');
Route::post('addManyCart', 'AjaxController@postAddCart')->name('addManyCart');
Route::get('cart', 'PageController@showCart')->name('showCart');
Route::get('checkout', 'PageController@getCheckout')->name('getCheckout');
Route::post('changeQty', 'AjaxController@changeQty')->name('changeQty');
Route::post('deleteClientProduct', 'AjaxController@deleteClientProduct')->name('deleteClientProduct');
Route::post('getDistrict', 'AjaxController@getDistrict')->name('getDistrict');
Route::post('getSubDistrict', 'AjaxController@getSubDistrict')->name('getSubDistrict');
Route::post('order', 'PageController@postOrder');
Route::get('register', 'PageController@getRegister');
Route::post('register', 'PageController@postRegister');
Route::get('logout', 'PageController@SignOut');
Route::get('editProfile', 'PageController@editProfile');
Route::post('signIn', 'PageController@postSignIn')->name('signIn');
Route::get('search', 'PageController@getSearch');
Route::post('addComment', 'AjaxController@addComment')->name('addComment');
Route::get('checkOrder', 'PageController@checkOrder')->name('checkOrder')->middleware('checkOrder');
Route::post('updateNoti', 'AjaxController@updateNoti')->name('updateNoti');
Route::post('orderProcess', 'AjaxController@orderProcess')->name('orderProcess');
Route::get('checkBill','PageController@getCheckBill')->name('checkBill');
Route::post('checkBill','PageController@postCheckBill');
Route::post('postSubscribe', 'AjaxController@postSubscribe')->name('postSubscribe');
