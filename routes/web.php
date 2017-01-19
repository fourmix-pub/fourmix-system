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
    return view('layouts.content.daily.index');
});
Route::get('/daily/', function () {
    return view('layouts.content.daily.index');
});
Route::get('/daily/', function () {
    return view('layouts.content.daily.index');
});

/*
|--------------------------------------------------------------------------
| プロジェクト
|	一覧、個人予算、台帳、予算対
|--------------------------------------------------------------------------
*/
Route::get('/project/', function () {
    return view('layouts.content.project.index');
});
Route::get('/project/', function () {
    return view('layouts.content.project.index');
});
Route::get('/project/', function () {
    return view('layouts.content.project.index');
});
Route::get('/project/', function () {
    return view('layouts.content.project.index');
});

/*
|--------------------------------------------------------------------------
| 基本設定
|	担当者、作業分類、部門分類、勤務分類、得意先分類
|--------------------------------------------------------------------------
*/
Route::get('/setting/staff', function () {
    return view('layouts.content.setting.staff');
});
Route::get('/setting/work', function () {
    return view('layouts.content.setting.work');
});
Route::get('/setting/departments', function () {
    return view('layouts.content.setting.departments');
});
Route::get('/setting/service', function () {
    return view('layouts.content.setting.service');
});
Route::get('/setting/customers', function () {
    return view('layouts.content.setting.customers');
});

/*
|--------------------------------------------------------------------------
| プロフィール情報
|--------------------------------------------------------------------------
*/
Route::get('/config/', function () {
    return view('layouts.content.config.index');
});

/*
|--------------------------------------------------------------------------
| 管理者設定
|--------------------------------------------------------------------------
*/
// Route::get('/config/', function () {
//     return view('layouts.content.config.index');
// });
