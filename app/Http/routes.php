<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return Redirect::to('Ben');
});

Route::get('Ben', function(){
    return '<center> Ben <br> <img src="https://media.licdn.com/mpr/mpr/shrink_100_100/AAEAAQAAAAAAAAQJAAAAJDA1YTY1ZTM0LTkzMDMtNDJhNi1iYjU5LTI4NTE3ZTA1YmU4Zg.jpg"> </center>';
});


Route::get('user/{anything}', function($anything){
    return 'you have entered in the uri pattern the argument : '.$anything;
})->where('anything' , '[0-9]+');

Route::get('shops', function(){
	return 'show the shops a available';
});

Route::get('shops/create' , function(){
	return 'add a shop to the database';
});

Route::post('shops/create' , function(){
	$shopName = Input::get('shopName');
	$shopDetails = Input::get('shopDetails');
	//Validate the input and create a shop
});

Route::get('shops/{shopName}' , function($shopName){
    return '<center><h1>this page for shop : </h1></center>'.$shopName ;
});

Route::get('shops/{shopName}/edit' , function($shopName){
    return '<center><h1>return the form for editing the shop name </h1></center>'.$shopName ;
});

Route::patch('shops/{shopName}/edit' , function($shopName){
    //getting details about the shop from database and update it
});

Route::delete('shops/{shopName}/delete' , function($shopName){
    //deletes shop from database
});
