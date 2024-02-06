<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Contact\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => ''], function () {

    /*
     *
     *  Contact Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'contact';
    $controller_name = 'ContactController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/{id}/{slug?}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);
    Route::post("$module_name", ['as' => "$module_name.store", 'uses' => "$controller_name@store"]);

    /*
     *
     *  Enquiry Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'enquiry';
    $controller_name = 'EnquiryController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/{id}/{slug?}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);
    Route::post("$module_name", ['as' => "$module_name.store", 'uses' => "$controller_name@store"]);
});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => '\Modules\Contact\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {
    /*
    * These routes need view-backend permission
    * (good if you want to allow more than one group in the backend,
    * then limit the backend features by different roles or permissions)
    *
    * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
    */

    /*
     *
     *  Contact Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'contact';
    $controller_name = 'ContactController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::get("$module_name/exportCSV", ['as'=> "$module_name.exportCSV",'uses'=> "$controller_name@exportCSV"]);
    Route::resource("$module_name", "$controller_name");

      /*
     *
     *  Address Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'address';
    $controller_name = 'AddressController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::resource("$module_name", "$controller_name");

      /*
     *
     *  Interest Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'interest';
    $controller_name = 'InterestController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
     Route::get("$module_name/exportCSV", ['as'=> "$module_name.exportCSV",'uses'=> "$controller_name@exportCSV"]);
    Route::resource("$module_name", "$controller_name");

      /*
     *
     *  Enquiry Routes
     *
     * ---------------------------------------------------------------------
     */
    $module_name = 'enquiry';
    $controller_name = 'EnquiryController';
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::get("$module_name/exportCSV", ['as'=> "$module_name.exportCSV",'uses'=> "$controller_name@exportCSV"]);
    Route::resource("$module_name", "$controller_name");
});
