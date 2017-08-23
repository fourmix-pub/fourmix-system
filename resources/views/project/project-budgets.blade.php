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
				BUDGET / RESULTS
			</h2>
		</div>
	</div>
</div>

{{-- ボタン --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<button type="button" class="btn btn-primary pull-right" data-toggle="collapse" href="#search">
			<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
		</button>
		<div class="btn-group" role="group" aria-label="...">
			<a type="button" class="btn btn-primary" href="{{ route('projects.budgets.project') }}">プロジェクト別</a>
			<a type="button" class="btn btn-default" href="{{ route('projects.budgets.personal') }}">個人別</a>
		</div>
	</div>
</div>
<br>

{{-- アコーディオン：検索ボタン --}}
@include('layouts.project-budgets.search')

{{-- 一覧 --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="text-center">
			<h3>プロジェクト別プロジェクト予算対実績表</h3>
		</div>
	</div>
</div>
@component('components.elements.table.table')
	@slot('thead')
		<tr class="active">
			<th>プロジェクト</th>
			<th>実行予算</th>
			<th>実績金額</th>
			<th>予算残高</th>
			<th>予算残％</th>
			<th>状態</th>
		</tr>
	@endslot
	@slot('tbody')
		@foreach($projects as $project)
			<tr>
				<td>{{ $project->name }}</td>
				<td align="right">{{ number_format($project->budget) }}</td>
				<td align="right">{{ number_format($project->sumByCost($project->id)->sum_cost) }}</td>
				<td align="right">{{ number_format(Analytics::balanceBudget($project)) }}</td>
				<td align="right">{{ Analytics::balanceBudgetRate($project) }}%</td>
				<td>
					@if($project->end)完了@endif
				</td>
			</tr>
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
