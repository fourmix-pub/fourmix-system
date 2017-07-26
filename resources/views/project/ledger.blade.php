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
				PROJECT LEDGER
			</h2>
		</div>
	</div>
</div>

{{-- コンテンツ --}}{{--xxx 前のボタンの位置--}}
{{--<div class="row">--}}
	{{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
	{{--</div>--}}
{{--</div>--}}
{{--<br>--}}


<div class="row">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
			<button class="btn btn-default print-budget pull-right">
				<span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
			</button>
			<button type="button" class="btn btn-primary" style="margin-right: 10px;" data-toggle="collapse" href="#search">
				<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
			</button>
		</div>
	</div>

	{{-- アコーディオン：検索ボタン --}}
	@component('components.elements.accordion.accordion')
		<form class="form-horizontal">
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
				<div class="btn-group">
					<button type="button" class="btn" onclick="location.href=''">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
					</button>
				</div>
			</div>
		</form>
	@endcomponent
	<br>
		{{-- 一覧 --}}
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h4 align="center">プロジェクト名：
					<b>PCP・メンズポケットサーバー移行</b>　責任者：<b>碓井智</b>
				</h4>
				<br>
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
								<td align="right">3,000,000</td>
								<td align="right">3,000,000</td>
								<td>2009/03/02</td>
								<td>2009/03/02</td>
								<td>2009/04/02</td>
							</tr>
						</tbody>
					</table>
				</div>
				</div>
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
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		@component('components.elements.table.admin.pagination')
		@endcomponent
	</div>
</div>
@endsection
