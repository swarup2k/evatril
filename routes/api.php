<?php

use Illuminate\Http\Request;

Route::prefix('merchant')->group(function () {

    //Account related routes
    Route::post('/pre-login', 'Merchant\API\LoginController@preLogin');
    Route::post('/login', 'Merchant\API\LoginController@login');
    Route::post('/register', 'Merchant\API\LoginController@register');
    Route::post('/verify/otp', 'Merchant\API\LoginController@verifyOtp');
    Route::post('account/update', 'Merchant\API\MerchantController@accountUpdate');

    //Venue related route
    Route::post('venue/add', 'Merchant\API\MerchantController@addVenue');
    Route::post('hall/add', 'Merchant\API\MerchantController@addHall');

});
