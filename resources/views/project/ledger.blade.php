@extends('layouts.app')

@section('title')
	プロジェクト台帳
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h3>
				<i class="fa fa-th-list" aria-hidden="true"></i>&nbsp;&nbsp;プロジェクト台帳
				<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
					<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
				</button>
			</h3>
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
			@component('components.elements.accordion.accordion')
				<form class="form-horizontal">
					<div class="form-group">
						<?php
						$projects = ['社内ログ管理システム','株式会社リゾーム','株式会社アシックス'];
						?>
						@component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
							プロジェクト名
						@endcomponent

						<?php
						$users = ['佐々木希','櫻井翔','松本潤'];
						?>
						@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
							責任者
						@endcomponent

						<?php
						$departments = ['システムデザイン','コンセプトデザイン','サポート'];
						?>
						@component('components.elements.form.select.select', ['items'=>$departments,'search'=>'false'])
							部門
						@endcomponent
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
					@component('components.elements.form.period')
					@endcomponent
					<div class="row text-center">
						<div class="btn-group" style="margin:2% 0% 0% 0%;">
							<button type="button" class="btn" onclick="location.href=''">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
							</button>
						</div>
					</div>
				</form>
			@endcomponent


			{{-- 一覧 --}}
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
					<button class="btn btn-default">
						<span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
					</button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover">
						<tr>
							<td class="active"><b>プロジェクト名</b></td>
							<td colspan="3">PCP・メンズポケットサーバー移行</td>
							<td class="active"><b>開始日</b></td>
							<td>2009/03/02</td>
						</tr>
						<tr>
							<td class="active"><b>責任者</b></td>
							<td colspan="3">碓井智</td>
							<td class="active"><b>完成予定日</b></td>
							<td>2009/03/02</td>
						</tr>
						<tr>
							<td class="active"><b>受注金額</b></td>
							<td align="right">3,000,000</td>
							<td class="active"><b>実行予算</b></td>
							<td align="right">3,000,000</td>
							<td class="active"><b>完成日</b></td>
							<td>2009/04/02</td>
						</tr>
					</table>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover">
						<thead>
							<tr class="active">
								<th>作業分類名</th>
								<th>作業時間</th>
								<th>作業金額</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>設計</td>
								<td>90.00</td>
								<td align="right">1,000,000</td>
							</tr>
							<tr>
								<td>打合せ</td>
								<td>90.00</td>
								<td align="right">1,000,000</td>
							</tr>
							<tr>
								<td>打合せ</td>
								<td>90.00</td>
								<td align="right">1,000,000</td>
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
	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.project.side-menu')
	</div>
</div>
@endsection
