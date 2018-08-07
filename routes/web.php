<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

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
        Route::get('dailies/search', 'DailyController@searchByDate')->name('dailies.search');
        //日報閲覧
        Route::get('dailies/view', 'DailyController@view')->name('daily.view');
        Route::patch('dailies/view/{daily}', 'DailyController@update')->name('daily.view.update');
        Route::delete('dailies/view/{daily}', 'DailyController@destroy')->name('daily.view.destroy');
        //集計表
        //プロジェクト別作業分類
        Route::get('dailies/analytics/work-types-by-project', 'DailyController@workTypesByProject')->name('daily.analytics.workTypes.byProject');
        //プロジェクト別担当者
        Route::get('dailies/analytics/users-by-project', 'DailyController@usersByProject')->name('daily.analytics.users.byProject');
        //担当者別作業分類
        Route::get('dailies/analytics/work-types-by-user', 'DailyController@workTypesByUser')->name('daily.analytics.workTypes.byUser');
        //担当者別プロジェクト
        Route::get('dailies/analytics/projects-by-user', 'DailyController@projectsByUser')->name('daily.analytics.projects.byUser');
    });

    /*
    |--------------------------------------------------------------------------
    | プロジェクト
    |	一覧、個人予算、台帳、予算対
    |--------------------------------------------------------------------------
    */

    Route::group(['namespace' => 'Projects'], function () {
        //プロジェクト入力（一覧）
        Route::resource('projects', 'ProjectController', [
            'except' => [
                'create', 'edit', 'show',
            ]
        ]);
        //プロジェクト台帳
        Route::get('/projects/details', 'ProjectController@details')->name('projects.details');
        //プロジェクト個人予算
        Route::get('projects/personal-budgets', 'PersonalBudgetController@index')->name('personal-budgets.index');
        Route::patch('projects/personal-budgets/update',
            'PersonalBudgetController@update')->name('personal-budgets.update');
        Route::post('projects/personal-budgets', 'PersonalBudgetController@store')->name('personal-budgets.store');
        Route::delete('projects/personal-budgets/delete',
            'PersonalBudgetController@destroy')->name('personal-budgets.destroy');
        //プロジェクト予算対(プロジェクト別)
        Route::get('projects/project-budgets', 'ProjectController@projectBudgets')->name('projects.budgets.project');
        //プロジェクト予算対(個人別)
        Route::get('projects/project-personal-budgets',
            'PersonalBudgetController@projectPersonalBudgets')->name('projects.budgets.personal');
    });

    /*
    |--------------------------------------------------------------------------
    | 基本設定
    |	担当者、作業分類、部門分類、勤務分類、得意先一覧
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'settings', 'namespace' => 'Settings'], function () {
        //作業分類
        Route::resource('work-types', 'WorkTypeController', [
            'except' => [
                'create', 'edit', 'show',
            ]
        ]);
        //部門分類
        Route::resource('departments', 'DepartmentController', [
            'except' => [
                'create', 'edit', 'show',
            ]
        ]);
        //勤務分類
        Route::resource('job-types', 'JobTypeController', [
            'except' => [
                'create', 'edit', 'show',
            ]
        ]);
        //得意先一覧
        Route::resource('customers', 'CustomerController', [
            'except' => [
                'create', 'edit', 'show',
            ]
        ]);
        //担当者一覧
        Route::resource('users', 'UserController', [
            'except' => [
                'create', 'show', 'edit'
            ]
        ]);
        //プロフィール変更
        Route::get('/profile', 'UserController@editProfile')->name('profile');
        Route::patch('/profile/{user}', 'UserController@updateProfile')->name('update-profile');
    });

    /*
    |--------------------------------------------------------------------------
    | プロフィール情報
    |--------------------------------------------------------------------------
    */

    Route::group(['prefix' => 'config', 'namespace' => 'Config'], function () {
        // パスワード変更
        Route::get('/password', 'ConfigController@editPassword')->name('password.edit');
        Route::post('/password', 'ConfigController@resetPassword')->name('password.store');
        ;
    });
});

/*
|--------------------------------------------------------------------------
| ログイン関連ルート
|--------------------------------------------------------------------------
*/

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('auth/token/{token}', 'Auth\SetPasswordController@showSetForm')->name('password.set');
Route::post('password/set', 'Auth\SetPasswordController@setPassword')->name('password.update');


/*
|--------------------------------------------------------------------------
| パスワード関連ルート
|--------------------------------------------------------------------------
*/

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');


/*
|--------------------------------------------------------------------------
| イベント管理関連ルート
|--------------------------------------------------------------------------
*/
//一覧表示
Route::get('events','Events\EventController@index')->name('events.events');
//詳細表示
Route::get('events/detail','Events\EventController@detail')->name('events.detail');
//
Route::get('events/create', 'Events\EventController@create')->name('events.create');
Route::post('events','Events\EventController@store')->name('events.store');