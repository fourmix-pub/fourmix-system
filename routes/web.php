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

//Route::get('/home', 'HomeController@index');

Route::get('/home', 'Daily\DailyController@index');
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

Route::group(['prefix' => 'daily', 'namespace' => 'Daily'], function () {

    // 日報入力
    Route::get('/', 'DailyController@index');
    // 日報一覧
    Route::get('/view', 'DailyController@view');
    // 日報集計
    Route::get('/total', 'DailyController@total');
});

/*
|--------------------------------------------------------------------------
| プロジェクト
|	一覧、個人予算、台帳、予算対
|--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'project', 'namespace' => 'Project'], function () {

    // 一覧
    Route::get('/', 'ProjectController@index');
    // 個人予算
    Route::get('/personal-budget', 'ProjectController@personalBudget');
    // 台帳
    Route::get('/ledger', 'ProjectController@ledger');
    // 予算対
    Route::get('/project-budget', 'ProjectController@projectBudget');
});

/*
|--------------------------------------------------------------------------
| 基本設定
|	担当者、作業分類、部門分類、勤務分類、得意先一覧
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    //担当者
    Route::get('/user', 'UserController@index');
    //作業分類
    Route::get('/category', 'CategoryController@index');
    //部門分類
    Route::get('/department', 'DepartmentController@index');
    //勤務分類
    Route::get('/work', 'WorkController@index');
    //得意先一覧
    Route::get('/customer', 'CustomerController@index');
});

/*
|--------------------------------------------------------------------------
| プロフィール情報
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'config', 'namespace' => 'Config'], function () {
    // プロフィール
    Route::get('/', 'ConfigController@index');
});

/*
|--------------------------------------------------------------------------
| 管理者設定
|--------------------------------------------------------------------------
*/
//Route::post('/register/', 'Auth\RegisterController@register ' );
//Route::match(['get', 'head'], '/register/', 'Auth\RegisterController@showRegistrationForm ')->name('register');