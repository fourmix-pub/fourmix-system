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
				<i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;担当者
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
				@include('layouts.content.setting.xs-side-menu')
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
										<select class="selectpicker" data-width="100%" data-live-search="true" title="担当者">
											<option data-tokens="">櫻井翔</option>
											<option data-tokens="">佐々木希</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">部門名</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%" title="部門名">
											<option>システムデザイン</option>
											<option>コンセプトデザイン</option>
											<option>サポート</option>
										</select>
									</div>
								</div>
								<div class="row text-center">
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
		</div>

		{{-- モーダル：追加ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="modal fade" id="add" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="margin:2% 0%;">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">担当者追加</h4>
							</div>
							<form class="form-horizontal">
								<div class="modal-body">
									<div class="form-group">
										<label class="col-xs-3 control-label" for="staff">担当者<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="staff"  placeholder="担当者" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="unit_cost">作業単価<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="unit_cost"  placeholder="作業単価" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="department">部門<span class="text-danger">*</span></label>
											<select class="selectpicker col-xs-8" title="部門"　id="department">
												<option>システムデザイン</option>
												<option>コンセプトデザイン</option>
												<option>サポート</option>
											</select>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="mail_address">メールアドレス<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="mail_address"  placeholder="メールアドレス" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="started_time">始業時刻<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<div class='input-group time'>
												<input type='text' class="form-control" value="09:30" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="ended_time">終業時刻<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<div class='input-group time'>
												<input type='text' class="form-control" value="18:30"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
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
		<div class="row" style="margin: 0% 1%;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="active">
								<th>ID</th>
								<th>名前</th>
								<th>作業単価</th>
								<th>部署</th>
								<th>退職</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>田中咲良</td>
								<td>2,500</td>
								<td>システム</td>
								<td align="center"></td>
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
								<td>呉傑</td>
								<td>2,500</td>
								<td>システム</td>
								<td align="center"></td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　>
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>山本耕史郎</td>
								<td>2,500</td>
								<td>システム</td>
								<td align="center"></td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>木村拓哉</td>
								<td>2,500</td>
								<td>コンセプト</td>
								<td align="center">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>中居正広</td>
								<td>2,500</td>
								<td>サポート</td>
								<td align="center">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>稲垣吾郎</td>
								<td>2,500</td>
								<td>サポート</td>
								<td align="center">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">7</th>
								<td>香取慎吾</td>
								<td>2,500</td>
								<td>サポート</td>
								<td align="center">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">8</th>
								<td>草彅剛</td>
								<td>2,500</td>
								<td>サポート</td>
								<td align="center">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">9</th>
								<td>新垣結衣</td>
								<td>2,500</td>
								<td>サポート</td>
								<td align="center"></td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">10</th>
								<td>北乃きい</td>
								<td>2,500</td>
								<td>サポート</td>
								<td align="center"></td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
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
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection
