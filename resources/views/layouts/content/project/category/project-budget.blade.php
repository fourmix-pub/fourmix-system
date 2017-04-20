@extends('layouts.app')

@section('title')
	プロジェクト予算対
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<div>
				<h2><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;プロジェクト予算対</h2>
			</div>

			<div class="container">
				<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
				</button>
				<button type="button" class="btn btn-danger pull-right" style="margin-right: 5%;" data-toggle="modal" data-target="#add">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;追加
				</button>
			</div>
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
								<form class="form-inline">
									<div class="row form text-center">
										<label class="sr-only" for="project">プロジェクト*</label>
										<select class="selectpicker" data-live-search="true" title="プロジェクト">
											<option data-tokens="fourmix-system">社内ログ管理システム</option>
											<option data-tokens="rhizo-me">株式会社リゾーム</option>
											<option data-tokens="asics">株式会社アシックス</option>
										</select>
										<label class="sr-only" for="staff">責任者</label>
										<div class="btn-group" style="margin:1% 1%;">
											<select class="selectpicker" title="責任者"　id="staff" style="width:180px">
												<option>システムデザイン</option>
												<option>コンセプトデザイン</option>
												<option>サポート</option>
											</select>
										</div>
									</div>
									<div class="row form text-center">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<label class="sr-only" for="started_day">開始日</label>
											<div class='input-group date datetimepicker1 started_day'>
												<input type='text' class="form-control" placeholder="開始日" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
											<label>～</label>
											<label class="sr-only" for="ended_day">終了日</label>
											<div class='input-group date datetimepicker3 ended_day'>
												<input type='text' class="form-control" placeholder="終了日" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-calendar"></span>
												</span>
											</div>
										</div>
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
									<h4 class="modal-title">プロジェクト追加</h4>
								</div>
								<form class="form-horizontal">
									<div class="modal-body">
										<div class="form-group">
											<label class="col-xs-3 control-label" for="project">プロジェクト名*</label>
											<div class="col-xs-8">
												<input type="text" class="form-control" id="project"  placeholder="プロジェクト名" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="primary_user">プライマリユーザ</label>
											<div class="col-xs-8">
												<select class="selectpicker form-control" data-live-search="true" title="プライマリユーザ">
													<option data-tokens="meiji">株式会社明治</option>
													<option data-tokens="rhizo-me">株式会社リゾーム</option>
													<option data-tokens="asics">株式会社アシックス</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="end_user">エンドユーザ</label>
												<div class="col-xs-8">
												<select class="selectpicker form-control" data-live-search="true" title="エンドユーザ">
													<option data-tokens="meiji">株式会社明治</option>
													<option data-tokens="rhizo-me">株式会社リゾーム</option>
													<option data-tokens="asics">株式会社アシックス</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="staff">責任者名*</label>
											<div class="col-xs-8">
												<select class="selectpicker form-control" data-live-search="true" title="責任者名">
													<option data-tokens="stanaka">田中咲良</option>
													<option data-tokens="kgo">呉傑</option>
													<option data-tokens="kyamamoto">山本耕史郎</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="contract_money">受注金額</label>
											<div class="col-xs-8">
												<input type="text" class="form-control" id="contract_money"  placeholder="受注金額" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="budget">実行予算</label>
											<div class="col-xs-8">
												<input type="text" class="form-control" id="budget"  placeholder="実行予算" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="started_day">開始日</label>
											<div class="col-xs-8">
												<div class='input-group date datetimepicker1 started_day'>
													<input type='text' class="form-control"/>
													<span class="input-group-addon">
														 <span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="ended_day">完了予定日</label>
											<div class="col-xs-8">
												<div class='input-group date datetimepicker3 ended_day'>
													<input type='text' class="form-control" value="18:30"/>
													<span class="input-group-addon">
														 <span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="ended_time">完了日</label>
											<div class="col-xs-8">
												<div class='input-group date datetimepicker3 ended_time'>
													<input type='text' class="form-control" value="18:30"/>
													<span class="input-group-addon">
														 <span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="note">備考</label>
											<div class="col-xs-8">
												<textarea class="form-control" rows="3" id="note"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="non-display_flag">非表示フラグ</label>
											<div class="col-xs-8">
											<div></div>
												<input type="checkbox" value="">
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
								<td></td>
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
								<td></td>
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
								<td></td>
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
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
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
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
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
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
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
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
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
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
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
								<td></td>
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
								<td></td>
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
