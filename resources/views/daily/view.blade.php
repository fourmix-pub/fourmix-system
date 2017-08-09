@extends('layouts.app')

@section('title')
    日報閲覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h2>
                VIEW
            </h2>
        </div>
    </div>
</div>

<div class="row">
<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
</button>
    <br>
</div>

{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        {{-- モーダル：編集ボタン --}}
        {{--@component('components.elements.modal.update', ['title'=>'日報編集'])--}}
            {{--@component('components.elements.form.modal.day')--}}
                {{--日付--}}
            {{--@endcomponent--}}

            {{--@php--}}
                {{--$projects = ['社内ログ管理システム','株式会社リゾーム','株式会社アシックス'];--}}
            {{--@endphp--}}
            {{--@component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])--}}
                {{--プロジェクト名--}}
            {{--@endcomponent--}}

            {{--@php--}}
                {{--$works = ['調査','分析','営業'];--}}
            {{--@endphp--}}
            {{--@component('components.elements.form.select.select', ['items'=>$works,'search'=>'true'])--}}
                {{--作業分類--}}
            {{--@endcomponent--}}

            {{--@component('components.elements.form.modal.time',['title'=>'開始','time'=>'09:30'])--}}
            {{--@endcomponent--}}

            {{--@component('components.elements.form.modal.time',['title'=>'終了','time'=>'18:30'])--}}
            {{--@endcomponent--}}

            {{--@php--}}
                {{--$jobs = ['通常','残業','休日'];--}}
            {{--@endphp--}}
            {{--@component('components.elements.form.select.select', ['items'=>$jobs,'search'=>'true'])--}}
                {{--勤務分類--}}
            {{--@endcomponent--}}

            {{--@component('components.elements.form.modal.text', ['name'=>'break'])--}}
                {{--休憩--}}
            {{--@endcomponent--}}

            {{--<div class="form-group">--}}
                {{--<label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="staff">--}}
                    {{--備考欄--}}
                {{--</label>--}}
                {{--<div class="col-xs-12 col-xs-12 col-sm-8 col-md-8 col-lg-8">--}}
            {{--<textarea name="note" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄">--}}
            {{--</textarea>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endcomponent--}}

        {{-- モーダル：削除ボタン --}}
        {{--@component('components.elements.modal.delete',['title'=>'日報削除'])--}}
            {{--田中咲良の日報--}}
        {{--@endcomponent--}}

        {{-- アコーディオン：検索ボタン --}}
        <br>
        @component('components.accordions.accordion')
            <form action="{{ route('daily.view') }}" class="form-horizontal" method="get">

                @component('components.elements.form.select', ['name' => 'user_id'])
                    @slot('label')
                        担当者名
                    @endslot
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if((int)$userId === (int)$user->id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                @endcomponent

                @component('components.elements.form.select', ['name' => 'project_id'])
                    @slot('label')
                        プロジェクト名
                    @endslot
                    @foreach($projects as $project)
                        <option value="{{ $project->id }}" @if((int)$projectId === (int)$project->id) selected @endif>{{ $project->name }}</option>
                    @endforeach
                @endcomponent

                @component('components.elements.form.select', ['name' => 'department_id'])
                    @slot('label')
                        部門名
                    @endslot
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" @if((int)$departmentId === (int)$department->id) selected @endif>{{ $department->name }}</option>
                    @endforeach
                @endcomponent

                @component('components.elements.form.select', ['name' => 'work_type_id'])
                    @slot('label')
                        作業分類名
                    @endslot
                    @foreach($workTypes as $workType)
                        <option value="{{ $workType->id }}" @if((int)$workTypeId === (int)$workType->id) selected @endif>{{ $workType->name }}</option>
                    @endforeach
                @endcomponent

                @component('components.elements.form.period')
                @endcomponent

                <div class="row form text-center">
                    <div class="btn-group">
                        <button type="submit" class="btn">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                        </button>
                    </div>
                </div>
            </form>
        @endcomponent

        {{-- 一覧 --}}
        @component('components.elements.table.table')
            @slot('thead')
            <tr class="active">
                <th>担当者</th>
                <th>日付</th>
                <th>プロジェクト名</th>
                <th>作業分類</th>
                <th>作業時間</th>
                <th>作業金額</th>
                <th></th>
            </tr>
            @endslot
            @slot('tbody')
                @foreach($dailies as $daily)
                    <tr>
                        <td>{{ $daily->user->name }}</td>
                        <td>{{ $daily->date }}</td>
                        <td>{{ $daily->project->name }}</td>
                        <td>{{ $daily->workType->name }}</td>
                        <td align="right">{{ $daily->time }}</td>
                        <td align="right">{{ $daily->cost }}</td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="6">備考：{{ $daily->note }}</td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent

        {{-- 一覧 --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                {{ $dailies->links() }}
            </div>
        </div>

    </div>
</div>
@endsection