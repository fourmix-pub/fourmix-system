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
    Route::patch('/users/profile', 'UserController@update')->name('updateUserApi');
    Route::get('/users/dailies', 'UserController@myDailies')->name('myDailiesApi');

    Route::get('/departments', 'DepartmentController@index')->name('departmentApi');

    Route::get('/dailies', 'DailyController@index')->name('dailiesApi');
    Route::post('/dailies', 'DailyController@store')->name('storeDailyApi');
    Route::patch('/dailies/{daily}', 'DailyController@update')->name('updateDailyApi');
    Route::delete('/dailies/{daily}', 'DailyController@delete')->name('deleteDailyApi');

    Route::get('/workTypes', 'WorkTypeController@index')->name('workTypeApi');
    Route::get('/jobTypes', 'JobTypeController@index')->name('jobTypeApi');
    Route::get('/projects', 'ProjectController@index')->name('projectApi');
    Route::get('/customers', 'CustomerController@index')->name('customerApi');
    Route::get('/departments', 'DepartmentController@index')->name('departmentApi');

    Route::get('/analytics/workTypePreProject', 'WorkTypePreProjectAnalysisController@index')->name('workTypePreProjectApi');
    Route::get('/analytics/userPreProject', 'UserPreProjectAnalysisController@index')->name('userPreProjectAnalysisApi');
    Route::get('/analytics/workTypePreUser', 'WorkTypePreUserAnalysisController@index')->name('workTypePreUserAnalysisApi');
    Route::get('/analytics/projectPreUser', 'ProjectPreUserAnalysisController@index')->name('projectPreUserAnalysisApi');
});
