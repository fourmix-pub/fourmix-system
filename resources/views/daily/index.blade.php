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
                                            <input type='text' class="form-control day" name="date" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}"/>
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
    </div>

     {{--スマホ版サイドメニュー --}}
    {{--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">--}}
        {{--@include('layouts.content.daily.side-menu')--}}
    {{--</div>--}}
</div>

@endsection