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

Route::prefix('admin')->group(function (){

    Route::get('/', 'Admin\HomeController@index')->name('admin.home');
    Route::get('/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('admin.login.validate');
    Route::get('/logout','Admin\Auth\LoginController@logout')->name('admin.logout');


    Route::get('venue/view/{id}','Admin\HomeController@viewVenue')->name('admin.venue.view');
    Route::get('venue/my','Admin\HomeController@myVenues')->name('admin.venue.my');
    Route::post('venue/add','Admin\HomeController@saveVenue')->name('admin.venue.save');
    Route::get('venue/merchant','Admin\HomeController@merchantVenues')->name('admin.venue.merchant');
    Route::get('venue/{id}/delete','Admin\HomeController@deleteMyVenues')->name('admin.venue.my.delete');

    Route::get('venue/add','Admin\VenueController@add')->name('admin.venue.add');
    Route::post('venue/add','Admin\VenueController@save')->name('admin.venue.save');


    Route::get('merchant/list','Admin\MerchantController@list')->name('admin.merchant.list');
    Route::get('merchant/{id}/activate','Admin\MerchantController@activateMerchant')->name('admin.merchant.activate');
    Route::get('merchant/{id}/deactivate','Admin\MerchantController@deactivateMerchant')->name('admin.merchant.deactivate');
    Route::get('merchant/{id}/delete','Admin\MerchantController@deleteMerchant')->name('admin.merchant.delete');


});






Route::prefix('merchant')->group(function (){


    Route::get('/', 'Merchant\HomeController@index')->name('merchant.home');
    Route::get('/bookings', 'Merchant\HomeController@bookings')->name('merchant.bookings');
    Route::get('/reviews', 'Merchant\HomeController@reviews')->name('merchant.reviews');
    Route::get('/payments', 'Merchant\HomeController@payments')->name('merchant.payments');
    Route::get('/support', 'Merchant\HomeController@support')->name('merchant.support');
    Route::get('/venues', 'Merchant\HomeController@myVenues')->name('merchant.venues');
    Route::get('/venues/master', 'Merchant\HomeController@myMasterVenues')->name('merchant.master.venues');
    Route::post('/', 'Merchant\HomeController@addMasterVenue')->name('merchant.add.master.venue');
    Route::post('/hall/add', 'Merchant\HomeController@addHall')->name('merchant.store.hall');
    Route::get('/hall/list', 'Merchant\HomeController@listHall')->name('merchant.list.hall');
    Route::get('/venue/{id}/delete', 'Merchant\HomeController@deleteVenue')->name('merchant.venue.delete');
    Route::get('/venue/master/{id}/delete', 'Merchant\HomeController@deleteMasterVenue')->name('merchant.venue.master.delete');
    Route::get('/login', 'Merchant\Auth\LoginController@showLoginForm')->name('merchant.login');
    Route::post('/login', 'Merchant\Auth\LoginController@login')->name('merchant.login.validate');
    Route::get('/logout','Merchant\Auth\LoginController@logout')->name('merchant.logout');

});
