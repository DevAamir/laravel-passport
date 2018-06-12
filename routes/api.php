<?php

use Illuminate\Http\Request;

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
//

Route::get('/logingrgrgrg',function (){
    echo $pro = Config::get('auth.guards.api.provider');
});



Route::get('/login',['as'=>'user.login','uses'=>'UserController@login']);

Route::get('/logintest',['as'=>'user.login12','uses'=>'UserController@login12']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
