<?php

if(empty($_GET['month'])){

    $month = date('n');
    $year = date('Y');

    if(isset($_GET['month'])){
        $year = $_GET['year'] - 1;
        $month = 12;
    }

}else{

    $year = $_GET['year'];

    switch ($_GET['month']){

        case 1:
            $month_eng = "Jan";
            break;

        case 2:
            $month_eng = "Feb";
            break;

        case 3:
            $month_eng = "Mar";
            break;

        case 4:
            $month_eng = "Apr";
            break;

        case 5:
            $month_eng = "May";
            break;

        case 6:
            $month_eng = "Jun";
            break;

        case 7:
            $month_eng = "Jul";
            break;

        case 8:
            $month_eng = "Aug";
            break;

        case 9:
            $month_eng = "Sep";
            break;

        case 10:
            $month_eng = "Oct";
            break;

        case 11:
            $month_eng = "Nov";
            break;

        case 12:
            $month_eng = "Dec";
            break;

        case 13:
            $month_eng = "Jan";
            $year += 1;
    }

    $month = date('n', strtotime("$month_eng $year"));
}



// 月末日を取得
$last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));

$calendar = array();
$j = 0;

// 月末日までループ
for ($i = 1; $i < $last_day + 1; $i++) {

    // 曜日を取得
    $week = date('w', mktime(0, 0, 0, $month, $i, $year));

    // 1日の場合
    if ($i == 1) {

        // 1日目の曜日までをループ
        for ($s = 1; $s <= $week; $s++) {

            // 前半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;

        }

    }

    // 配列に日付をセット
    $calendar[$j]['day'] = $i;
    $j++;

    // 月末日の場合
    if ($i == $last_day) {

        // 月末日から残りをループ
        for ($e = 1; $e <= 6 - $week; $e++) {

            // 後半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
        }
    }
}

$previous_month = $month - 1;
$next_month = $month + 1;
?>


@extends('layouts.app')

@section('title')
    作業日報入力
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <div>
                <h2>
                    DAILY REPORTS
                </h2>
            </div>
        </div>
    </div>
</div>


{{-- モーダル：編集ボタン --}}
@component('components.elements.modal.update', ['title'=>'日報編集'])
    @component('components.elements.form.modal.day')
        日付
    @endcomponent

    @php
        $projects = ['社内ログ管理システム','株式会社リゾーム','株式会社アシックス'];
    @endphp
    @component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
        プロジェクト名
    @endcomponent

    @php
        $works = ['調査','分析','営業'];
    @endphp
    @component('components.elements.form.select.select', ['items'=>$works,'search'=>'true'])
        作業分類
    @endcomponent

    @component('components.elements.form.modal.time',['title'=>'開始','time'=>'09:30'])
    @endcomponent

    @component('components.elements.form.modal.time',['title'=>'終了','time'=>'18:30'])
    @endcomponent

    @php
        $jobs = ['通常','残業','休日'];
    @endphp
    @component('components.elements.form.select.select', ['items'=>$jobs,'search'=>'true'])
        勤務分類
    @endcomponent

    @component('components.elements.form.modal.text', ['name'=>'break'])
        休憩
    @endcomponent

    <div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="staff">
            備考欄
        </label>
        <div class="col-xs-12 col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <textarea name="note" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄">
            </textarea>
        </div>
    </div>
@endcomponent

{{-- モーダル：削除ボタン --}}
@component('components.elements.modal.delete',['title'=>'日報削除'])
    2016/7/31の日報
@endcomponent



{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h4 style="padding: 8px"><?php echo $year; ?>年<?php echo $month; ?>月のカレンダー</h4>

                <table class="calendar">
                    <tr>
                        <th>日</th>
                        <th>月</th>
                        <th>火</th>
                        <th>水</th>
                        <th>木</th>
                        <th>金</th>
                        <th>土</th>
                    </tr>

                    <tr>
                        <?php $cnt = 0; ?>
                        <?php foreach ($calendar as $key => $value): ?>

                        <td>
                            <?php $cnt++; ?>
                            <?php echo $value['day']; ?>
                        </td>

                        <?php if ($cnt == 7): ?>
                    </tr>
                    <tr>
                        <?php $cnt = 0; ?>
                        <?php endif; ?>

                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>

            <style type="text/css">
                table.calendar {
                    width: 100%;
                }
                table.calendar th {
                    background: #EEEEEE;
                }
                table.calendar th,
                table.calendar td {
                    border: 2px solid #CCCCCC;
                    text-align: center;
                    padding: 5px;
                }
            </style>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h4 style="padding: 8px">日報一覧</h4>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover daily-table">
                        <thead>
                            <tr class="active">
                                <th>日付</th>
                                <th>プロジェクト名</th>
                                <th>作業分類</th>
                                <th>開始時刻</th>
                                <th>終了時刻</th>
                                <th>休憩時間(分)</th>
                                <th>勤務分類</th>
                                <th></th>
                            </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/08/31</td>
                                <td>タリーズ</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                <div class="row daily-form">

                                    <div class="hidden-xs hidden-sm col-md-2 col-lg-2 date-form" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control day" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hided" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control day" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"/>
                                    </div>


                                    <div class="hidden-xs hidden-sm col-md-3 col-lg-3" style="padding-bottom: 7px;">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="プロジェクト名">
                                            <option data-tokens="fourmix-system">社内ログ管理システム</option>
                                            <option data-tokens="rhizo-me">株式会社リゾーム</option>
                                            <option data-tokens="asics">株式会社アシックス</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hided" style="padding-bottom: 7px;">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="プロジェクト名">
                                            <option data-tokens="fourmix-system">社内ログ管理システム</option>
                                            <option data-tokens="rhizo-me">株式会社リゾーム</option>
                                            <option data-tokens="asics">株式会社アシックス</option>
                                        </select>
                                    </div>


                                    <div class="hidden-xs hidden-sm col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="作業分類">
                                            <option>作業</option>
                                            <option>見積・営業活動</option>
                                            <option>分析</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hided" style="padding-bottom: 7px;">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="作業分類">
                                            <option>作業</option>
                                            <option>見積・営業活動</option>
                                            <option>分析</option>
                                        </select>
                                    </div>


                                    <div class="hidden-xs hidden-sm col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control time" placeholder="開始"/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hided" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control time" placeholder="開始"/>
                                    </div>


                                    <div class="hidden-xs hidden-sm col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control time" placeholder="終了"/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hided" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control time" placeholder="終了"/>
                                    </div>


                                    <div class="hidden-xs hidden-sm col-md-1 col-lg-1 rest-form" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control" placeholder="休憩(分)"/>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hided" style="padding-bottom: 7px;">
                                        <input type='text' class="form-control" placeholder="休憩(分)"/>
                                    </div>

                                    <div class="hidden-xs hidden-sm col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="勤務分類">
                                            <option selected>通常</option>
                                            <option>残業</option>
                                            <option>休日</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hided" style="padding-bottom: 7px;">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="勤務分類">
                                            <option selected>通常</option>
                                            <option>残業</option>
                                            <option>休日</option>
                                        </select>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea name="note" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄"></textarea>
                                    </div>
                                </div>

                                <br>

                                <div align="middle">
                                    <button type="submit" class="btn registration-daily">登録</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

     {{--スマホ版サイドメニュー --}}
    {{--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">--}}
        {{--@include('layouts.content.daily.side-menu')--}}
    {{--</div>--}}
</div>

@endsection