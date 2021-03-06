<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Blade::setContentTags('<%', '%>');        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data

Route::get("videos/{page?}", ['uses' => "VideoController@index"]);
Route::get("vote/{page?}", ['uses' => "VoteController@index"]);

Route::post("voteAjax", ['uses' => "VoteController@voteAjax"]);

Route::get("photos/{page?}", ['uses' => "PhotoController@index"]);

// Route::get("home/get_page", "HomeController@get_page");

Route::get("user", "UserController");

Route::get("user/{username}/{page?}", "UserController@profile");


Route::get("login", "UserController@login");

Route::get("validate_login", "UserController@validate_login");

Route::get("logout", "UserController@logout");

Route::get("upload-photo", "UserController@upload_photo");

Route::post("submit-photo", "UserController@submit_photo");



Route::get("upload-video", "UserController@upload_video");
Route::post("submit-video", "UserController@submit_video");


Route::get("video/{id}", ['uses' =>'VideoController@detail']);
Route::get("photo/{id}", ['uses' =>'PhotoController@detail']);

	

// Route::resource('user', 'UserController');

