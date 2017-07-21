@extends('layouts.app')

@section('title')
	個人予算一覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h3>
				<i class="fa fa-jpy" aria-hidden="true"></i>&nbsp;&nbsp;個人予算一覧
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<button class="btn btn-default">
							<span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
						</button>
					</div>
				</div>
				<br>
				<br>
				<div class="row" style="margin: 0% 1%;">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="col-md-12">
							<table class="table table-bordered table-hover">
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
									<td align="right">100,000</td>
									@component('components.elements.table.admin.button')
									@endcomponent
								</tr>
								<tr class="active">
									<td>アメリカ計画</td>
									<td>佐々木希</td>
									<td align="right">250,000</td>
										@component('components.elements.table.admin.button')
										@endcomponent
								</tr>
								<tr>
									<td>ドイツ計画</td>
									<td>佐々木希</td>
									<td align="right">2,000,000</td>
									@component('components.elements.table.admin.button')
									@endcomponent
								</tr>
								<tr class="active">
									<td>イギリス計画</td>
									<td>佐々木希</td>
									<td align="right">4,000,000</td>
									@component('components.elements.table.admin.button')
									@endcomponent
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

		</div>
	</div>
	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.project.side-menu')
	</div>
</div>
@endsection
