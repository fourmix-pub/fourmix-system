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
    <br>

        {{-- アコーディオン：検索ボタン --}}
        @include('layouts.daily-view.search')

        {{-- 一覧 --}}
        @component('components.elements.table.table')
            @slot('thead')
            <tr class="active">
                <th>担当者</th>
                <th>日付</th>
                <th>顧客名</th>
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
                        <td>{{ $daily->date->format('Y/m/d') }}</td>
                        <td>{{ $daily->project->customer ? $daily->project->customer->name : '' }}</td>
                        <td>{{ $daily->project->name }}</td>
                        <td>{{ $daily->workType->name }}</td>
                        <td align="right">{{ $daily->time }}</td>
                        <td align="right">¥{{ number_format($daily->cost) }}</td>
                        <td>
                            @include('layouts.daily-view.delete')
                            @include('layouts.daily-view.edit')
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="7">備考：{{ $daily->note }}</td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent

        {{-- ページネーション --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                {{ $dailies->links() }}
            </div>
        </div>

    </div>
</div>
@endsection