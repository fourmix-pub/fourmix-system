@extends('layouts.app')

@section('title')
    集計表
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h2>
                ANALYTICS
            </h2>
        </div>
    </div>
</div>

<br>

{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="btn-group" role="group" aria-label="...">
                    <a type="button" class="btn btn-primary" href="{{ route('daily.analytics.workTypes.byProject') }}">プロジェクト別作業分類</a>
                    <a type="button" class="btn btn-default" href="{{ route('daily.analytics.users.byProject') }}">プロジェクト別担当者</a>
                    <a type="button" class="btn btn-default" href="{{ route('daily.analytics.workTypes.byUser') }}">担当者別作業分類</a>
                    <a type="button" class="btn btn-default" href="{{ route('daily.analytics.projects.byUser') }}">担当者別プロジェクト集計表</a>
                </div>
            </div>
        </div>
        <br>

        {{-- アコーディオン：検索ボタン --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ route('daily.analytics.workTypes.byProject') }}" class="form-horizontal" method="get">

                            @component('components.elements.form.select', ['name' => 'project_id'])
                                @slot('label')
                                    プロジェクト名
                                @endslot
                                @foreach($projectsSelect as $projectSelect)
                                    <option value="{{ $projectSelect->id }}" data-subtext="{{ $projectSelect->customer ? $projectSelect->customer->name : '' }}" @if((int)$projectId === (int)$projectSelect->id) selected @endif>{{ '#'.$projectSelect->id.' '.$projectSelect->name }}</option>
                                @endforeach
                            @endcomponent

                            <div class="row text-center">
                                <div class="btn-group">
                                    <button type="submit" class="btn" onclick="location.href=''">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                                    </button>
                                </div>
                            </div>

                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        {{-- 一覧 --}}
        @if($project != null)
            <hr Width="100%">
            <div class="row total-view">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h3 class="text-center">
                                        プロジェクト別作業分類集計表
                                        <br>
                                        <small>{{ $project->customer->name }}：{{ $project->name }}</small>
                                    </h3>
                                </div>
                            </div>

                            @component('components.elements.table.table')
                                @slot('thead')
                                <tr class="active">
                                    <th>作業分類</th>
                                    <th>作業時間</th>
                                    <th>作業金額</th>
                                </tr>
                                @endslot
                                @slot('tbody')
                                    @foreach($project->sumByWorkType as $daily)
                                        <tr>
                                            <td>{{ $daily->workType->name }}</td>
                                            <td align="right">{{ $daily->sum_time }}</td>
                                            <td align="right">¥{{ number_format($daily->sum_cost) }}</td>
                                        </tr>
                                    @endforeach
                                @endslot
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@endsection