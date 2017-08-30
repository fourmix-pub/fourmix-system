@extends('layouts.app')

@section('title')
    作業日報入力
@endsection

@section('content')
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            header: { center: 'month,agendaDay' },
            events: [
                // events go here
            ],
            resources: [
                { id: 'a', title: 'Room A' },
                { id: 'b', title: 'Room B' },
                { id: 'c', title: 'Room C' },
                { id: 'd', title: 'Room D' }
            ],
        })
    });
</script>

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


{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <h4 style="padding: 8px">カレンダー</h4>
                <div id='calendar'></div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <h4 style="padding: 8px">日報一覧</h4>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="table-responsive">
                    @component('components.elements.table.table')
                        @slot('thead')
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
                        @endslot
                        @slot('tbody')
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/08/31</td>
                                <td>タリーズ</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td align="right">60</td>
                                <td align="center"><span class="label label-info">普通</span></td>
                                <td></td>
                            </tr>
                        @endslot
                    @endcomponent
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