<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:api'])->group(function () {
    Route::get('/users/profile', 'UserController@profile')->name('profileApi');
    Route::get('/users', 'UserController@index')->name('usersApi');
    Route::patch('/users/profile/{user}', 'UserController@update')->name('updateUserApi');
    Route::get('/users/dailies', 'UserController@myDailies')->name('myDailiesApi');

    Route::get('/departments', 'DepartmentController@index')->name('departmentApi');
});
