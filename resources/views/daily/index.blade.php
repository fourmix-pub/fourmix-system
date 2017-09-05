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
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form method="post" action="{{ route('dailies.store') }}">
                            {{ csrf_field() }}
                            <div class="row daily-form">
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control day" name="date" value="{{ $date }}"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-bottom: 7px;">
                                    <select class="selectpicker" name="project_id" data-width="100%" data-live-search="true" title="プロジェクト名">
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}" data-tokens="fourmix-system">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                    <select class="selectpicker" name="work_type_id" data-width="100%" data-live-search="true" title="作業分類">
                                        @foreach($workTypes as $workType)
                                            <option value="{{ $workType->id }}" data-tokens="fourmix-system">{{ $workType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control time" name="start" placeholder="開始"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control time" name="end" placeholder="終了"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1" style="padding-bottom: 7px;">
                                    <input type='text' class="form-control" name="rest" placeholder="休憩(分)"/>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style="padding-bottom: 7px;">
                                    <select class="selectpicker" name="job_type_id" data-width="100%" data-live-search="true" title="勤務分類">
                                        @foreach($jobTypes as $jobType)
                                            <option value="{{ $jobType->id }}" data-tokens="fourmix-system">{{ $jobType->name }}</option>
                                        @endforeach
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
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection