<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'auth',
    'namespace' => 'Auth'
], function () {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('password-reset-send', 'AuthController@sendPasswordReset');
    Route::post('password-reset', 'AuthController@passwordReset')->name('password.reset');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'guest',
    'namespace' => 'Guest'
], function () {
    Route::get('search-property', 'PropertyController@search');
    Route::apiResource('properties', 'PropertyController');
    Route::apiResource('service-provider-profile', 'ServiceProviderProfileController');
    Route::apiResource('service-provider-type', 'ServiceProviderTypeController');
    Route::apiResource('broker-profile', 'BrokerProfileController');
    Route::apiResource('pricing-plans', 'PricePlanController');
    Route::apiResource('service-provider-quotes', 'ServiceProviderQuoteController');
});

Route::group([
    'prefix' => 'broker',
    'namespace' => 'Broker',
    'middleware' => ['auth:api']
], function () {
    Route::apiResource('broker-profile', 'BrokerProfileController');
});

Route::group([
    'prefix' => 'service-provider',
    'namespace' => 'ServiceProvider',
    'middleware' => ['auth:api']
], function () {

});

Route::group([
    'prefix' => 'investor',
    'namespace' => 'Investor',
    'middleware' => ['auth:api']
], function () {

});

Route::group([
    'prefix' => 'payments',
    'namespace' => 'Payments',
    'middleware' => ['auth:api']
], function () {

});
