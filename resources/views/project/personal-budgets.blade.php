@extends('layouts.app')

@section('title')
	個人予算一覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				プロジェクト個人予算
			</h2>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
		<button type="button" class="btn btn-primary pull-right" style="margin-right: 10px;" data-toggle="collapse" href="#search">
			<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
		</button>
		@include('layouts.personal-budgets.create')
	</div>
</div>

<br>
@include('layouts.personal-budgets.search')


{{-- 一覧 --}}
@component('components.elements.table.table')
	@slot('thead')
		<tr class="active">
			<th>顧客名</th>
			<th>プロジェクト</th>
			<th>担当者</th>
			<th>個人予算</th>
			<th></th>
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
					<td>
					@include('layouts.personal-budgets.edit')
					@include('layouts.personal-budgets.delete')
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