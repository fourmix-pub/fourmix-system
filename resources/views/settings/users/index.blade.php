@extends('layouts.app')

@section('title')
	担当者設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				USERS
			</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;" data-toggle="collapse" href="#search">
			<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
		</button>
		@include('layouts.users.create')
	</div>
</div>

<br>

{{-- コンテンツ --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

		{{-- スマホ版サイドメニュー --}}
		@include('layouts.content.setting.xs-side-menu')

		@include('layouts.users.search')

		 {{-- 一覧 --}}
		@component('components.elements.table.table')
			@slot('thead')
				<tr class="active">
					<th>ID</th>
					<th>名前</th>
					<th>作業単価</th>
					<th>部署</th>
					<th>退職</th>
					<th></th>
				</tr>
			@endslot

			@slot('tbody')
				@foreach($users as $user)
				<tr>
					<th scope="row">{{ $user->id }}</th>
					<td>{{ $user->name }}</td>
					<td align="right">¥{{ number_format($user->cost) }}</td>
					<td>{{ $user->department->name }}</td>
					<td align="center">
						@if($user->is_resignation == 1)
							<span class="glyphicon glyphicon-ok-circle" style="color: red; font-size: large;"></span>
						@endif
					</td>
					<td>
						@include('layouts.users.edit')
						@include('layouts.users.delete')
					</td>
				@endforeach
			@endslot
		@endcomponent

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				{{ $users->links() }}
			</div>
		</div>

	</div>

	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection