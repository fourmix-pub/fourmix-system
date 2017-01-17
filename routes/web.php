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

Route::get('/home', 'HomeController@index');

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
Route::get('/daily/', function () {
    return view('layouts.daily.index');
});
Route::get('/daily/', function () {
    return view('layouts.daily.index');
});
Route::get('/daily/', function () {
    return view('layouts.daily.index');
});

/*
|--------------------------------------------------------------------------
| プロジェクト
|	一覧、個人予算、台帳、予算対
|--------------------------------------------------------------------------
*/
Route::get('/project/', function () {
    return view('layouts.project.index');
});
Route::get('/project/', function () {
    return view('layouts.project.index');
});
Route::get('/project/', function () {
    return view('layouts.project.index');
});
Route::get('/project/', function () {
    return view('layouts.project.index');
});

/*
|--------------------------------------------------------------------------
| 基本設定
|	担当者、作業分類、部門分類、勤務分類、得意先分類
|--------------------------------------------------------------------------
*/
Route::get('/setting/staff', function () {
    return view('layouts.setting.staff');
});
Route::get('/setting/work', function () {
    return view('layouts.setting.work');
});
Route::get('/setting/departments', function () {
    return view('layouts.setting.departments');
});
Route::get('/setting/service', function () {
    return view('layouts.setting.service');
});
Route::get('/setting/customers', function () {
    return view('layouts.setting.customers');
});


/*
|--------------------------------------------------------------------------
| プロフィール情報
|--------------------------------------------------------------------------
*/
Route::get('/config/', function () {
    return view('layouts.config.index');
});

/*
|--------------------------------------------------------------------------
| 管理者設定
|--------------------------------------------------------------------------
*/
// Route::get('/config/', function () {
//     return view('layouts.config.index');
// });