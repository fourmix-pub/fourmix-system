@extends('layouts.app')

@section('title')
	顧客設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				<i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;顧客
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
				@include('layouts.content.setting.xs-side_menu')
			</div>
		</div>

		{{-- アコーディオン：検索ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="collapse" id="search"　style="margin:1% 1%;">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-inline">
								<div class="row form text-center">
									<label class="sr-only" for="customer">顧客名</label>
									<select class="selectpicker" data-live-search="true" title="顧客名">
										<option data-tokens="meiji">株式会社明治</option>
										<option data-tokens="rhizo-me">株式会社リゾーム</option>
										<option data-tokens="asics">株式会社アシックス</option>
									</select>

									<label class="sr-only" for="customer_type"> クライアント種類 </label>
									<select class="selectpicker" title="クライアント種類">
										<option data-tokens="end">エンド</option>
										<option data-tokens="primary">プライマリ</option>
									</select>
									<div class="btn-group" >
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
		</div>

		{{-- モーダル：追加ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="modal fade" id="add" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="margin:2% 0%;">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">顧客追加</h4>
							</div>
							<form class="form-horizontal">
								<div class="modal-body">
									<div class="form-group">
										<label class="col-xs-3 control-label" for="customer">顧客名*</label>
										<div class="col-xs-8">
											<select class="selectpicker form-control" data-live-search="true" title="顧客名">
												<option data-tokens="meiji">株式会社明治</option>
												<option data-tokens="rhizo-me">株式会社リゾーム</option>
												<option data-tokens="asics">株式会社アシックス</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="customer_type">クライアント種類*</label>
										<div class="col-xs-8">
											<select class="selectpicker form-control" title="クライアント種類">
												<option data-tokens="end">エンド</option>
												<option data-tokens="primary">プライマリ</option>
											</select>
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
								<th>企業名</th>
								<th>クライアント種類</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>株式会社明治</td>
								<td>エンド</td>
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
								<td>株式会社リゾーム</td>
								<td>プライマリ</td>
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
								<td>株式会社アシックス</td>
								<td>エンド</td>
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
								<td>株式会社 思文閣出版</td>
								<td>エンド</td>
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
								<th scope="row">5</th>
								<td>ミツワ電機工業株式会社</td>
								<td>プライマリ</td>
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
								<th scope="row">6</th>
								<td>株式会社リゾーム</td>
								<td>プライマリ</td>
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
								<th scope="row">7</th>
								<td>株式会社リゾーム</td>
								<td>エンド</td>
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
								<th scope="row">8</th>
								<td>株式会社リゾーム</td>
								<td>プライマリ</td>
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
								<th scope="row">9</th>
								<td>株式会社リゾーム</td>
								<td>エンド</td>
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
								<th scope="row">10</th>
								<td>株式会社リゾーム</td>
								<td>プライマリ</td>
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
				<div class="text-center">
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
				</div>
			</div>
		</div>
	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side_menu')
	</div>
</div>
@endsection
