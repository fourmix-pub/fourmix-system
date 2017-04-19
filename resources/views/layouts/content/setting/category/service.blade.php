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
				<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;勤務分類設定
				<button type="button" class="btn btn-danger pull-right" style="margin-right: 15%;" data-toggle="modal" data-target="#add">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;追加
				</button>
			</h2>
		</div>
	</div>
</div>

{{-- コンテンツ --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

		{{-- PC版サイドメニュー --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				@include('layouts.content.setting.xs-side-menu')
			</div>
		</div>

	   {{-- モーダル：追加ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="modal fade" id="add" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="margin:2% 0%;">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">作業分類追加</h4>
							</div>
							<form class="form-horizontal">
								<div class="modal-body">
									<div class="form-group">
										<label class="col-xs-3 control-label" for="service">勤務分類名*</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="service"  placeholder="作業分類名" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="cost_rate">単価掛率*</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="cost_rate"  placeholder="単価掛率" />
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
									<button type="button" class="btn btn-primary"　 data-dismiss="modal">登録</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- 一覧 --}}
		<div class="row" style="margin: 0% 1%;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<th>ID</th>
								<th>勤務分類</th>
								<th>単価掛率</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>普通勤務</td>
								<td>1.00</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>休日勤務</td>
								<td>1.25</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>普通残業</td>
								<td>1.25</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>深夜残業</td>
								<td>1.50</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				{{-- <div class="text-center">
					<nav class="pagination">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="前のページへ">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="次のページへ">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
				</div> --}}
			</div>
		</div>
	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection
