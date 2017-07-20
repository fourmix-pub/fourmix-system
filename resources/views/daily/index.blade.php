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
                    <h3><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;作業日報入力</h3>
                </div>
            </div>
        </div>
    </div>

    {{-- モーダル：削除ボタン --}}
    @component('components.elements.modal.delete')
    @endcomponent

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="row">
                <div class="table-responsive col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <?php echo $year; ?>年<?php echo $month; ?>月のカレンダー
                    <br>
                    <br>

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

                        <a href="http://fourmix-system.app/daily?month=<?=$previous_month?>&year=<?=$year?>">＜前の月</a>
                        <a href="http://fourmix-system.app/daily?month=<?=$next_month?>&year=<?=$year?>" style="float: right">次の月＞</a>
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

                <div class="table-responsive col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
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
                                <td>60</td>
                                <td>普通</td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td>60</td>
                                <td>普通</td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td>60</td>
                                <td>普通</td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td>2016/08/31</td>
                                <td>タリーズ</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td>60</td>
                                <td>普通</td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="table-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <table>
                        {{-- ▼ 入力画面 ▼ --}}
                        <form action="#">
                            <table class="table field">
                                    <tr>
                                        <td width="14%">
                                            <input type='text' class="form-control day" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}" />
                                        </td>
                                        <td width="22%">
                                            <select class="selectpicker" data-width="100%" data-live-search="true" title="プロジェクト名">
                                                <option data-tokens="fourmix-system">社内ログ管理システム</option>
                                                <option data-tokens="rhizo-me">株式会社リゾーム</option>
                                                <option data-tokens="asics">株式会社アシックス</option>
                                            </select>
                                        </td>
                                        <td width="15%">
                                            <select class="selectpicker" data-width="100%" title="作業分類">
                                                <option>作業</option>
                                                <option>見積・営業活動</option>
                                                <option>分析</option>
                                            </select>
                                        </td>
                                        <td width="12%">
                                            <input type='text' class="form-control time" placeholder="開始時刻" />
                                        </td>
                                        <td width="12%">
                                            <input type='text' class="form-control time" placeholder="終了時刻" />
                                        </td>
                                        <td width="15%">
                                            <input type='text' class="form-control"  placeholder="休憩時間(分)" />
                                        </td>
                                        <td>
                                            <select class="selectpicker" data-width="100%" title="勤務分類">
                                                <option>通常</option>
                                                <option>残業</option>
                                                <option>休日</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr style="border-style: hidden none none;">
                                        <td colspan="8">
                                            <textarea name="note" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            <table class="parent"></table>
                            <div align="middle">
                                <button type="submit" class="btn btn-primary">登録</button>
                            </div>
                        </form>
                        {{-- ▲ 入力画面 ▲ --}}
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- スマホ版サイドメニュー --}}
    {{--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">--}}
        {{--@include('layouts.content.daily.side-menu')--}}
    {{--</div>--}}
</div>

@endsection