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
				PROJECTS
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
		<button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal" data-target="#add">
			<i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
		</button>
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
			<th>プロジェクト名</th>
			<th style="width: 88px;">責任者</th>
			<th>受注金額</th>
			<th>実行予算</th>
			<th>開始日</th>
			<th>完了予定日</th>
			<th>完了日</th>
			<th></th>
		</tr>
	@endslot
	@slot('tbody')
		@foreach($projects as $project)
			<tr>
				<th scope="row">{{ $project->id }}</th>
				<td>{{ $project->name }}</td>
				<td>{{ $project->user->name }}</td>
				<td align="right">{{ $project->cost }}</td>
				<td align="right">{{ $project->budget }}</td>
				<td>{{ $project->start }}</td>
				<td>{{ $project->end_expect }}</td>
				<td>{{ $project->end }}</td>
				<td>
					@include('layouts.projects.edit')
					@include('layouts.projects.delete')
				</td>
			</tr>
		@endforeach
	@endslot
@endcomponent

{{-- 一覧 --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
		{{ $projects->links() }}
	</div>
</div>
@endsection
