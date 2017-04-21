@extends('layouts.app')

@section('title')
	プロジェクト台帳
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<div>
				<h2><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;プロジェクト台帳</h2>
			</div>

			<div class="container">
				<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
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
				<div class="collapse" id="search" style="margin:1% 1%;">
					<div class="panel panel-default">

						<div class="row">
							<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>

							<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
								<div class="panel-body">
										<form class="form-inline">

											<div class="row text-center">
												<div class="form-group">
													<label class="sr-only" for="project">プロジェクト</label>
													<select class="selectpicker" data-live-search="true" title="プロジェクト">
														<option data-tokens="fourmix-system">社内ログ管理システム</option>
														<option data-tokens="rhizo-me">株式会社リゾーム</option>
														<option data-tokens="asics">株式会社アシックス</option>
													</select>
												</div>

												<div class="form-group">
													<label class="sr-only" for="staff">責任者</label>
													<div class="btn-group" style="margin:1% 1%;">
														<select class="selectpicker" title="責任者" id="staff" style="width:180px">
															<option>中栄進</option>
														</select>
													</div>
												</div>
											</div>
											<br>
											<div class="row text-center">
												<div class="form-group">
													<label class="sr-only" for="department">部門*</label>
													<select id="department" class="selectpicker" data-live-search="true" title="部門">
														<option>システムデザイン</option>
														<option>コンセプトデザイン</option>
														<option>サポート</option>
													</select>
												</div>

												<div class="form-group">
													<label class="radio-inline">
														<input type="radio" name="project_status" value="">全
													</label>
													<label class="radio-inline">
														<input type="radio" name="project_status" value="">完
													</label>
													<label class="radio-inline">
														<input type="radio" name="project_status" value="">未
													</label>
												</div>
											</div>
											<br>
											<div class="row text-center">
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
											<br>
											<div class="row text-center">
												<div class="btn-group" style="margin:2% 0% 0% 0%;">
													<button type="button" class="btn" onclick="location.href=''">
														<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
													</button>
												</div>
											</div>
											<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
										</form>
									</div>
								</div>
							</div>
						</div>

					<hr Width="100%">

					</div>
				</div>


			{{-- 一覧 --}}
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"></div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<button class="btn btn-default">
	                        <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
	                    </button>
					</div>
				</div>
				<br>
				<div class="row" style="margin: 0% 1%;">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
							<tr>
								<td>プロジェクト名</td>
								<td colspan="3">PCP・メンズポケットサーバー移行</td>
								<td>開始日</td>
								<td>2009/03/02</td>
							</tr>
							<tr>
								<td>責任者</td>
								<td colspan="3">碓井智</td>
								<td>完成予定日</td>
								<td>2009/03/02</td>
							</tr>
							<tr>
								<td>受注金額	</td>
								<td>3,000,000円</td>
								<td>実行予算</td>
								<td>3,000,000円</td>
								<td>完成日</td>
								<td>32009/04/02</td>
							</tr>
						</table>
					</div>
				</div>

				<br>

				<div class="row" style="margin: 0% 1%;">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>作業分類名</th>
									<th>作業時間</th>
									<th>作業金額</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>設計</td>
									<td>90.00</td>
									<td>1,000,000</td>
								</tr>
								<tr>
									<td>打合せ</td>
									<td>90.00</td>
									<td>1,000,000</td>
								</tr>
								<tr>
									<td>打合せ</td>
									<td>90.00</td>
									<td>1,000,000</td>
								</tr>
							</tbody>
						</table>
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

		</div>
	</div>
	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.project.side-menu')
	</div>
</div>
@endsection
