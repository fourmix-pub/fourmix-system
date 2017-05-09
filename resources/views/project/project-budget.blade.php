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
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">プロジェクト</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%" data-live-search="true" title="プロジェクト">
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
										<select class="selectpicker" data-width="100%"  title="責任者">
											<option>櫻井翔</option>
											<option>大野智</option>
										</select>
									</div>
									<div class="col-sm-1"></div>
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
									<div class="col-sm-1"></div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">表示方法</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<label class="radio-inline">
										<input type="radio" name="project_status" value="">プロジェクト別
										</label>
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">個人別
										</label>
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">個人予算別
										</label>
									</div>
									<div class="col-sm-1"></div>
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

			{{-- 一覧 --}}
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="text-center">
					<h2>プロジェクト予算対実績表（全体）</h2>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>プロジェクト</th>
							<th>実行予算</th>
							<th>実績金額</th>
							<th>予算残高</th>
							<th>予算残％</th>
							<th>状態</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>○○プロジェクト</td>
							<td>3,000,000</td>
							<td>3,000,000</td>
							<td>0</td>
							<td>0.0%</td>
							<td>完了</td>
						</tr>
						<tr>
							<td>○○プロジェクト</td>
							<td>3,000,000</td>
							<td>3,000,000</td>
							<td>0</td>
							<td>0.0%</td>
							<td>完了</td>
						</tr>
					</tbody>
				</table>
			<br>
			<hr Width="100%">
			<br>
				<div class="text-center">
					<h2>プロジェクト予算対実績表（個人）</h2>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>プロジェクト</th>
							<th>担当者</th>
							<th>実績金額</th>
							<th>予算残高</th>
							<th>予算残％</th>
							<th>状態</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>○○プロジェクト</td>
					<td>櫻井翔</td>
						<td>3,000,000</td>
						<td>0</td>
						<td>33.3%</td>
						<td>完了</td>
					</tr>
					<tr>
						<td>○○プロジェクト</td>
						<td>櫻井翔</td>
						<td>3,000,000</td>
						<td>0</td>
						<td>0.0%</td>
						<td>完了</td>
					</tr>
					</tbody>
				</table>
			<br>
			<hr Width="100%">
			<br>
				<div class="text-center">
					<h2>プロジェクト個人予算対実績表</h2>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>プロジェクト</th>
							<th>担当者</th>
							<th>個人予算</th>
							<th>実績金額</th>
							<th>個人予算残高</th>
							<th>個人予算残％</th>
							<th>状態</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>○○プロジェクト</td>
						<td>櫻井翔</td>
						<td>3,000,000</td>
						<td>1,500,000</td>
						<td>1,500,000</td>
						<td>50.0%</td>
						<td>完了</td>
					</tr>
					<tr>
						<td>○○プロジェクト</td>
						<td>櫻井翔</td>
						<td>3,000,000</td>
						<td>3,000,000</td>
						<td>0</td>
						<td>0.0%</td>
						<td>完了</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.project.side-menu')
	</div>
</div>
@endsection
