<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:api'])->group(function () {
    //Route::get('test', 'UserController@index');
});
Route::get('test', 'UserController@index');