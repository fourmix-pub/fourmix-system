@extends('layouts.app')

@section('title')
    プロジェクト予算対
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h2>
                プロジェクト予算対
            </h2>
        </div>
    </div>
</div>
{{-- ボタン--}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <button type="button" class="btn btn-primary pull-right" data-toggle="collapse" href="#search">
            <i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
        </button>
        <div class="btn-group" role="group" aria-label="...">
            <a type="button" class="btn btn-default" href="{{ url('projects/project-budgets') }}">プロジェクト別</a>
            <a type="button" class="btn btn-primary" href="{{ url('projects/project-personal-budgets') }}">個人別</a>
        </div>
    </div>
</div>

<br>

{{-- コンテンツ --}}
{{-- アコーディオン：検索ボタン --}}
@include('layouts.project-personal-budgets.search')

{{-- 一覧 --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="text-center">
            <h3>個人別予算対実績表</h3>
        </div>
    </div>
</div>
@component('components.elements.table.table')
    @slot('thead')
        <tr class="active">
            <th>顧客名</th>
            <th>プロジェクト</th>
            <th>担当者</th>
            <th>個人予算</th>
            <th>実績金額</th>
            <th>個人予算残高</th>
            <th>個人予算残％</th>
            <th>状態</th>
        </tr>
    @endslot
    @slot('tbody')
        @foreach($projects as $project)
            @foreach($project->budgetFilter($userId) as $user)
                <tr>
                    <td>{{ $project->customer ? $project->customer->name : '' }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $user->name }}</td>
                    <td align="right">¥{{ number_format($user->pivot->budget) }}</td>
                    <td align="right">¥{{ number_format($project->sumByCostPersonal($project->id, $user->id)->sum_cost) }}</td>
                    <td align="right">¥{{ number_format(Analytics::balancePersonalBudget($project, $user)) }}</td>
                    <td align="right">{{ number_format(Analytics::balancePersonalBudgetRate($project, $user)) }}%</td>
                    <td>
                        @if($project->end)完了@endif
                    </td>
                </tr>
            @endforeach
        @endforeach
    @endslot
@endcomponent

{{-- ページネーション --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
        {{ $projects->links() }}
    </div>
</div>
@endsection
