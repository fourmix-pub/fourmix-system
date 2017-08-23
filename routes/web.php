<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

/*
|--------------------------------------------------------------------------
| モックルート
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| 作業日報
|	入力、閲覧、集計
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'Dailies'], function () {
    //日報一覧
    Route::resource('dailies', 'DailyController', ['except' => [
        'create', 'edit', 'show',
    ]]);
    //日報閲覧
    Route::get('dailies/view', 'DailyController@view')->name('daily.view');
    Route::patch('dailies/view/{daily}', 'DailyController@update')->name('daily.view.update');
    Route::delete('dailies/view/{daily}', 'DailyController@destroy')->name('daily.view.destroy');
});

/*
|--------------------------------------------------------------------------
| プロジェクト
|	一覧、個人予算、台帳、予算対
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'Projects'], function () {
    //プロジェクト入力（一覧）
    Route::resource('projects', 'ProjectController', ['except' => [
        'create', 'edit', 'show',
    ]]);
    //プロジェクト台帳
    Route::get('/projects/details', 'ProjectController@details')->name('projects.details');
    //プロジェクト個人予算
    Route::get('projects/personal-budgets', 'PersonalBudgetController@index')->name('personal-budgets.index');
    Route::patch('projects/personal-budgets/update', 'PersonalBudgetController@update')->name('personal-budgets.update');
    Route::post('projects/personal-budgets', 'PersonalBudgetController@store')->name('personal-budgets.store');
    Route::delete('projects/personal-budgets/delete', 'PersonalBudgetController@destroy')->name('personal-budgets.destroy');
    //プロジェクト予算対(プロジェクト別)
    Route::get('projects/project-budgets', 'ProjectController@projectBudgets')->name('projects.budgets.project');
    //プロジェクト予算対(個人別)
    Route::get('projects/project-personal-budgets', 'PersonalBudgetController@projectPersonalBudgets')->name('projects.budgets.personal');
});

/*
|--------------------------------------------------------------------------
| 基本設定
|	担当者、作業分類、部門分類、勤務分類、得意先一覧
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'settings', 'namespace' => 'Settings'], function () {
    //作業分類
    Route::resource('work-types', 'WorkTypeController', ['except' => [
        'create', 'edit', 'show',
    ]]);
    //部門分類
    Route::resource('departments', 'DepartmentController', ['except' => [
        'create', 'edit', 'show',
    ]]);
    //勤務分類
    Route::resource('job-types', 'JobTypeController', ['except' => [
        'create', 'edit', 'show',
    ]]);
    //得意先一覧
    Route::resource('customers', 'CustomerController', ['except' => [
        'create', 'edit', 'show',
    ]]);
    //担当者一覧
    Route::resource('users', 'UserController', ['except' => [
        'create', 'show',
    ]]);
    //プロフィール変更
    Route::patch('/profile/{user}', 'UserController@updateProfile')->name('update-profile');
});

/*
|--------------------------------------------------------------------------
| プロフィール情報
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'config', 'namespace' => 'Config'], function () {
    // パスワード変更
    Route::get('/password', 'ConfigController@resetPassword');
});

Route::get('test', function () {

});
