<?php

namespace App\Http\Controllers\Daily;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DailyController extends Controller
{
    /**
     *日報 入力　
     *
     * @return mixed
     */
    public function index()
    {
        return view('daily.index');
    }

    /**
     *日報 閲覧
     *
     * @return mixed
     */
    public function view()
    {
        return view('daily.view');
    }

    /**
     *日報 集計
     *
     * @return mixed
     */
    public function total()
    {
        return view('daily.total');
    }

}
