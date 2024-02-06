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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.','middleware' =>['cors']], function () {


    /**-----Enquiry Controller---- */
    Route::post('enquiries', 'EnquiryController@store');

    /**-----newsletter Controller---- */
    Route::post('newsletter', 'NewsletterController@store');


    /**-----mailchimp Controller---- */
    Route::post('mailchimp', 'MailChimpController@index');

    Route::get('footer', 'FooterMenuController@index');

});
