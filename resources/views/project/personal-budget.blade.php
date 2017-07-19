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
				<i class="fa fa-jpy" aria-hidden="true"></i>&nbsp;&nbsp;個人予算一覧
				<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
				</button>
				<button type="button" class="btn btn-danger pull-right" style="margin-right: 5%;" data-toggle="modal" data-target="#add">
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
				@include('layouts.content.project.xs-side-menu')
			</div>
		</div>

		{{-- アコーディオン：検索ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="collapse" id="search"　style="margin:1% 1%;">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">担当者</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%"  title="指定なし">
											<option>指定なし</option>
											<option>櫻井翔</option>
											<option>大野智</option>
										</select>
									</div>
									<div class="col-sm-1"></div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">部門名</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%" title="指定なし">
											<option>指定なし</option>
											<option>システムデザイン</option>
											<option>コンセプトデザイン</option>
											<option>サポート</option>
										</select>
									</div>
									<div class="col-sm-1"></div>
								</div>
								<div class="row form text-center">
									<div class="btn-group" style="margin:2% 0% 0% 0%;">
										<button type="button" class="btn" onclick="location.href=''">
											<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				<hr Width="100%">
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
									<h4 class="modal-title">個人予算追加</h4>
								</div>
								<form class="form-horizontal">
									<div class="modal-body">
										<div class="form-group">
											<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">プロジェクト<span class="text-danger">*</span> </label>
											<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
												<select class="selectpicker" data-width="100%" data-live-search="true" title="指定なし">
													<option data-tokens="fourmix-system">指定なし</option>
													<option data-tokens="fourmix-system">社内ログ管理システム</option>
													<option data-tokens="rhizo-me">株式会社リゾーム</option>
													<option data-tokens="asics">株式会社アシックス</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">担当者<span class="text-danger">*</span> </label>
											<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
												<select class="selectpicker" data-width="100%" data-live-search="true" title="指定なし">
													<option data-tokens="">指定なし</option>
													<option data-tokens="">櫻井翔</option>
													<option data-tokens="">佐々木希</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">個人予算金額<span class="text-danger">*</span></label>
											<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
												<input type="text" class="form-control" id="personal_budget" width="100%" placeholder="個人予算金額" />
											</div>
										</div>
									</div>
								</form>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
									<button type="button" class="btn btn-primary"　 data-dismiss="modal">登録</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- 一覧 --}}
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row" style="margin: 0% 1%;">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>プロジェクト</th>
								<th>担当者</th>
								<th>個人予算</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>日本計画</td>
								<td>佐々木希</td>
								<td>100,000</td>
								<td>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<td>日本計画</td>
								<td>佐々木希</td>
								<td>100,000</td>
								<td>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="6" align="center">
									<nav class="pagination text-right">
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
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.project.side-menu')
	</div>
</div>
@endsection
