@extends('layouts.app')

@section('title')
	プロジェクト一覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				<i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;プロジェクト一覧
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
				<div class="collapse" id="search" style="margin:1% 1%;">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">プロジェクト</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%" data-live-search="true" title="指定なし">
											<option data-tokens="">指定なし</option>
											<option data-tokens="fourmix-system">社内ログ管理システム</option>
											<option data-tokens="rhizo-me">株式会社リゾーム</option>
											<option data-tokens="asics">株式会社アシックス</option>
										</select>
									</div>
									<div class="col-sm-1"></div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">責任者</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%" data-live-search="true" title="指定なし">
											<option data-tokens="">指定なし</option>
											<option data-tokens="">櫻井翔</option>
											<option data-tokens="">佐々木希</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">部門</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%" title="指定なし">
											<option>指定なし</option>
											<option>システムデザイン</option>
											<option>コンセプトデザイン</option>
											<option>サポート</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">表示区分</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">全て
										</label>
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">完了
										</label>
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">未完了
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">期間</label>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class='input-group day'>
											<input type='text' class="form-control" placeholder="開始日" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
									<label class="col-xs-1 col-sm-1 col-md-1 col-lg-1 control-label" style="text-align: center">～</label>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class='input-group day'>
											<input type='text' class="form-control" placeholder="終了日" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
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
											<label class="col-xs-3 control-label" for="project">プロジェクト名<span class="text-danger">*</span></label>
											<div class="col-xs-8">
												<input type="text" class="form-control" id="project"  placeholder="指定なし" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="primary_user">プライマリユーザ<span class="text-danger">*</span></label>
											<div class="col-xs-8">
												<select class="selectpicker form-control" data-live-search="true" title="指定なし">
													<option data-tokens="meiji">指定なし</option>
													<option data-tokens="meiji">株式会社明治</option>
													<option data-tokens="rhizo-me">株式会社リゾーム</option>
													<option data-tokens="asics">株式会社アシックス</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="end_user">エンドユーザ<span class="text-danger">*</span></label>
												<div class="col-xs-8">
												<select class="selectpicker form-control" data-live-search="true" title="指定なし">
													<option data-tokens="meiji">指定なし</option>
													<option data-tokens="meiji">株式会社明治</option>
													<option data-tokens="rhizo-me">株式会社リゾーム</option>
													<option data-tokens="asics">株式会社アシックス</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="staff">責任者名<span class="text-danger">*</span></label>
											<div class="col-xs-8">
												<select class="selectpicker form-control" data-live-search="true" title="指定なし">
													<option data-tokens="stanaka">指定なし</option>
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
												<div class='input-group day'>
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
												<div class='input-group day'>
													<input type='text' class="form-control"/>
													<span class="input-group-addon">
														 <span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="ended_time">完了日</label>
											<div class="col-xs-8">
												<div class='input-group day'>
													<input type='text' class="form-control"/>
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
											<div class="col-xs-8 checkbox" style="margin-left: 20px;">
												<input type="checkbox" value="1" >
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
								<th>プロジェクト名</th>
								<th>責任者</th>
								<th>作業単価</th>
								<th>部署</th>
								<th>退職</th>
								<th>開始日</th>
								<th>完了日</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td><a href="ledger.blade.php">PCP・メンズポケットサーバー移行</a></td>
								<td>田中咲良</td>
								<td>2,500</td>
								<td>システム</td>
								<td></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								<td align="center">
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add" title="編集">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal" title="削除">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td></td>
								<td>呉傑</td>
								<td>2,500</td>
								<td>システム</td>
								<td></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>山本耕史郎</td>
								<td>2,500</td>
								<td>システム</td>
								<td></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>木村拓哉</td>
								<td>2,500</td>
								<td>コンセプト</td>
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>中居正広</td>
								<td>2,500</td>
								<td>サポート</td>
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>稲垣吾郎</td>
								<td>2,500</td>
								<td>サポート</td>
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>香取慎吾</td>
								<td>2,500</td>
								<td>サポート</td>
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>草彅剛</td>
								<td>2,500</td>
								<td>サポート</td>
								<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>新垣結衣</td>
								<td>2,500</td>
								<td>サポート</td>
								<td></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
								<td></td>
								<td>北乃きい</td>
								<td>2,500</td>
								<td>サポート</td>
								<td></td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
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
