@extends('layouts.app')

@section('title')
	プロジェクト一覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2 align="center">
				プロジェクト一覧
			</h2>
		</div>
	</div>
</div>

{{-- コンテンツ --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;" data-toggle="collapse" href="#search">
			<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
		</button>
		@include('layouts.projects.create')
	</div>
</div>
<br>

{{-- アコーディオン：検索ボタン --}}
@include('layouts.projects.search')

{{-- 一覧 --}}
@component('components.elements.table.table')
	@slot('thead')
		<tr class="active">
			<th>ID</th>
			<th>顧客名</th>
			<th>プロジェクト名</th>
			<th style="width: 88px;">責任者</th>
			<th>受注金額</th>
			<th>実行予算</th>
			<th>開始日</th>
			<th>完了予定日</th>
			<th>完了日</th>
			<th>非表示</th>
			<th></th>
		</tr>
	@endslot
	@slot('tbody')
		@foreach($projects as $project)
			<tr>
				<th scope="row">{{ $project->id }}</th>
				<td>{{ $project->customer ? $project->customer->name : '' }}</td>
				<td>{{ $project->name }}</td>
				<td>{{ $project->user->name }}</td>
				<td align="right">¥{{ number_format($project->cost) }}</td>
				<td align="right">¥{{ number_format($project->budget) }}</td>
				<td>{{ $project->start->format('Y/m/d') }}</td>
				<td>{{ $project->end_expect->format('Y/m/d') }}</td>
				<td>{{ $project->end ? $project->end->format('Y/m/d') : $project->end }}</td>
				<td align="center">
					@if($project->can_display == 1)
						<span class="glyphicon glyphicon-ok-circle" style="color: red; font-size: large;"></span>
					@endif
				</td>
				<td>
					@include('layouts.projects.edit')
					@include('layouts.projects.delete')
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
