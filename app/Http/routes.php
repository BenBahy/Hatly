<?php

use \Illuminate\Support\Facades;
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

Route::resource('shops','shopController');