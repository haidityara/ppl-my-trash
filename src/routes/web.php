<?php

use Illuminate\Support\Facades\Route;

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


Route::get('login', 'AuthClientController@index');
Route::get('register', 'UserController@register');
Route::post('register', 'UserController@registerStore');
Route::post('login', 'AuthClientController@auth');

Route::group(['middleware' => 'AuthSeller'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('trash-pick', 'SellerController@trashPick');

    // trash pick
    Route::post('trash-step-1','SellerActionController@trashPickS1');
    Route::post('trash-step-2','SellerActionController@trashPickS2');
    Route::post('trash-step-3','SellerActionController@trashPickS3');

    //Profile
    Route::get('profile','SellerController@profile');

    //history
    Route::get('history','SellerController@history');

    //point
    Route::get('point','SellerController@point');
    Route::post('point/withdraw','SellerActionController@withdrawPoint');
    Route::get('point/withdraw/{type}', 'SellerController@withdraw');

    //help
    Route::get('help','SellerController@ask');

    //point
    Route::get('trash-drop','SellerController@trashDrop');

    Route::get('logout','AuthClientController@logout');

});

Route::group(['middleware' => 'AuthBuyer'], function () {
    Route::get('buyer','BuyerController@home');
    Route::get('buyer/trash-pick','BuyerController@trashPicks');
    Route::get('buyer/trash-pick/{id}','BuyerController@trashPick');

    Route::post('buyer/trash-take','BuyerActionController@takeOrder');
    Route::post('buyer/update-order/','BuyerActionController@updateOrder');

    //History
    Route::get('buyer/history','BuyerController@getHistory');
    Route::get('buyer/history/{id}','BuyerController@getDetailHistory');
    // profile
    Route::get('buyer/profile','BuyerController@profile');

    Route::get('buyer/help','BuyerController@ask');

    // Subscribe
    Route::get('buyer/subscribe','BuyerController@subscriptions');
//    Route::get('buyer/subscribe','BuyerController@subscriptions');
    Route::get('buyer/subscription','BuyerController@mySubscription');
    Route::get('buyer/plan/{id}','BuyerController@subscribe');
    Route::post('buyer/subscribe','BuyerActionController@subscribe');

    Route::get('logout','AuthClientController@logout');
});

Route::group(['middleware' => 'AuthAdmin'], function () {

});


Route::get('test', 'TestController@index');
