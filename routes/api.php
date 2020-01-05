<?php

use Illuminate\Http\Request;

Route::prefix('merchant')->group(function () {

    //Account related routes
    Route::post('/pre-login', 'Merchant\API\LoginController@preLogin');
    Route::post('/login', 'Merchant\API\LoginController@login');
    Route::post('/register', 'Merchant\API\LoginController@register');
    Route::post('/verify/otp', 'Merchant\API\LoginController@verifyOtp');
    Route::post('account/update', 'Merchant\API\MerchantController@accountUpdate');
    Route::post('forgot-password/sent-otp', 'Merchant\API\LoginController@forgotSendOtp');
    Route::post('change-password', 'Merchant\API\LoginController@changePassword');


    //Venue related route
    Route::post('venue/add', 'Merchant\API\MerchantController@addVenue');
    Route::post('master/venue/add', 'Merchant\API\MerchantController@addMasterVenue');
    Route::post('hall/add', 'Merchant\API\MerchantController@addHall');
    Route::post('myMasterVenueList', 'Merchant\API\MerchantController@myMasterVenueList');

    //Catering Package Related Route

    Route::post('addPackage', 'Merchant\API\MerchantController@addPackage');
    Route::post('updatePackage', 'Merchant\API\MerchantController@updatePackage');
    Route::post('listPackage', 'Merchant\API\MerchantController@listPackage');
    Route::post('deletePackage', 'Merchant\API\MerchantController@deletePackage');


});
