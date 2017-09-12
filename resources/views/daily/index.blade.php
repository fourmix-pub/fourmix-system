@extends('layouts.app')

@section('title')
    作業日報入力
@endsection

@section('content')
<style>
    .fc-day:hover{
        background-color: #fcf8e3;
    }
    /*Turn pointer events back on*/
    .fc-bgevent,
    .fc-event-container{
        pointer-events:auto; /*events*/
    }
</style>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            themeSystem: 'bootstrap3',
            defaultDate: '{{ $date }}',
            locale: 'ja',
            eventLimit: 4,
            header: {
                center: false,
                right:  false
            },
            events:{!! $dailiesJson !!},
            navLinks: true,
            dayClick: function(date, jsEvent, view) {

                document.location.href = "/dailies/search?date=" + date.format();

            },
            dayRender: function(date, cell){
                if (date.format() === '{{ $date }}'){
                    cell.css("background-color","#fcf8e3");
                }
            },
            navLinkDayClick: function(date, jsEvent) {
                $('#changeToDay').addClass('active');
                $('#changeToMonth').removeClass('active');
                $('#calendar').fullCalendar('changeView', 'agendaDay', date.format());
            }
        })
        $('#changeToDay').click(function () {
            $('#calendar').fullCalendar('changeView', 'agendaDay');
        })
        $('#changeToMonth').click(function () {
            $('#calendar').fullCalendar('changeView', 'month');
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
        <form method="get" action="{{ route('dailies.search') }}">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ route('dailies.search', ['date' => \Carbon\Carbon::parse($date)->subMonth()->format('Y-m-d')]) }}" class="btn btn-primary" style="padding-top: 8px; padding-bottom: 6px;">
                        <span class="glyphicon glyphicon-menu-left"></span>
                    </a>
                    <a href="{{ route('dailies.index') }}" class="btn btn-primary" style="padding-top: 8px; padding-bottom: 6px;">
                        本日
                    </a>
                    <a href="{{ route('dailies.search', ['date' => \Carbon\Carbon::parse($date)->addMonth()->format('Y-m-d')]) }}" class="btn btn-primary" style="padding-top: 8px; padding-bottom: 6px;">
                        <span class="glyphicon glyphicon-menu-right"></span>
                    </a>　
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary active" id="changeToMonth">
                            <input type="radio" name="options" id="option2" autocomplete="off"> 月
                        </label>
                        <label class="btn btn-primary" id="changeToDay">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> 日
                        </label>
                    </div>
                </div>
                <br class="visible-xs-inline">
                <br class="visible-xs-inline">
                <br class="visible-xs-inline">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" align="right">
                    <div class="input-group">
                        <input type='text' name="date" class="form-control day" value="{{ $date }}"/>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary" style="padding-top: 8px; padding-bottom: 6px;">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id='calendar'></div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4 style="margin: 10px">日報一覧</h4>
            </div>
        </div>
        @if($dailies->first())
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                @foreach($dailies as $daily)
                                    <tr>
                                        <td>{{ $daily->date->format('Y/m/d') }}</td>
                                        <td>{{ $daily->project->name }}</td>
                                        <td>{{ $daily->workType->name }}</td>
                                        <td>{{ $daily->start()->format('H:i') }}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $daily->end)->format('H:i') }}</td>
                                        <td align="right">{{ $daily->rest }}</td>
                                        <td align="center"><span class="label label-info">{{ $daily->jobType->name }}</span></td>
                                        <td>
                                            @include('layouts.daily-view.edit')
                                            @include('layouts.daily-view.delete')
                                        </td>
                                    </tr>
                                @endforeach
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        @else
            <h2 align="middle" style="color: red">NO DATA</h2>
        @endif
    </div>
</div>

<br>

@include('layouts.daily-index.input-lg-form')
@include('layouts.daily-index.input-sm-form')

@endsection