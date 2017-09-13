@extends('layouts.app')

@section('title')
	勤務設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				JOB TYPES
			</h2>
		</div>
	</div>
</div>

{{-- モーダル:追加ボタン --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		@include('layouts.job-types.create')
	</div>
</div>

<br>

{{-- コンテンツ --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

		{{-- スマホ版サイドメニュー --}}
		@include('layouts.content.setting.xs-side-menu')

		{{-- 一覧 --}}
		@component('components.elements.table.table')

			@slot('thead')
				<th class="active">
					ID
				</th>
				<th class="active">
					勤務分類
				</th>
				<th class="active">
					単価掛率
				</th>
				<th class="active">
				</th>
			@endslot

			@slot('tbody')
				@foreach($jobTypes as $jobType)
					<tr>
						<th scope="row">{{ $jobType->id }}</th>
						<td>{{ $jobType->name }}</td>
						<td align="right">{{ number_format($jobType->unit_betting_rate, 2)  }}</td>
						<td>
							{{-- モーダル：編集ボタン --}}
							@include('layouts.job-types.edit')
							@include('layouts.job-types.delete')
						</td>
					</tr>
				@endforeach
			@endslot
		@endcomponent

	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection