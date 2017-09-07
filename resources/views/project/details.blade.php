@extends('layouts.app')

@section('title')
	プロジェクト台帳
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2 align="center">
				PROJECT DETAILS
			</h2>
		</div>
	</div>
</div>

{{--検索ボタン--}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
		<button type="button" class="btn btn-primary" style="margin-right: 18px;" data-toggle="collapse" href="#search">
			<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
		</button>
	</div>
</div>
<br>

<div class="row">

	{{-- アコーディオン：検索ボタン --}}
	@include('layouts.project-details.search')
	<br>

	{{-- 一覧 --}}
	@foreach($projects as $project)
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3 class="text-center">
							{{ $project->name }}
							<br>
							<small>担当者：{{ $project->user->name }}</small>
						</h3>
					</div>
				</div>
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr class="active">
										<th>受注金額</th>
										<th>実行予算</th>
										<th>開始日</th>
										<th>完成予定日</th>
										<th>完成日</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td align="right">¥{{ number_format($project->cost) }}</td>
										<td align="right">¥{{ number_format($project->budget) }}</td>
										<td>{{ $project->start->format('Y/m/d') }}</td>
										<td>{{ $project->end_expect->format('Y/m/d') }}</td>
										<td>{{ $project->end ? $project->end->format('Y/m/d') : $project->end }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					@if(count($project->dailies) > 0)
						<br>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr class="active">
										<th>作業分類名</th>
										<th>作業時間</th>
										<th>作業金額</th>
									</tr>
								</thead>
								<tbody>
									@foreach($project->sumByWorkType()->get() as $daily)
										<tr>
											<td>{{ $daily->workType->name }}</td>
											<td align="right">{{ $daily->sum_time }}</td>
											<td align="right">¥{{ number_format($daily->sum_cost) }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							</div>
						</div>
					@endif

				</div>
			</div>
		</div>
	@endforeach

	{{-- ページネーション --}}
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
			{{ $projects->links() }}
		</div>
	</div>

</div>
@endsection
