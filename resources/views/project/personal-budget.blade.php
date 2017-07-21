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
				<button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal" data-target="#add">
					<i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
				</button>
			</h3>
		</div>
	</div>
</div>

{{-- コンテンツ --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

{{-- SM版サイドメニュー --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		@include('layouts.content.project.xs-side-menu')
	</div>
</div>

		{{-- モーダル：削除ボタン --}}
		@component('components.elements.modal.delete')
		@endcomponent

		{{-- アコーディオン：検索ボタン --}}
		<div class="row">
			@component('components.elements.accordion.accordion')
				<form class="form-horizontal">
					<div class="form-group">

                        <?php
                        $users = ['佐々木希','櫻井翔','松本潤'];
                        ?>
						@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
							担当者
						@endcomponent

                        <?php
                        $departments = ['システムデザイン','コンセプトデザイン','サポート'];
                        ?>
						@component('components.elements.form.select.select', ['items'=>$departments,'search'=>'false'])
							部門
						@endcomponent
					</div>
					<div class="row text-center">
						<div class="btn-group" style="margin:2% 0% 0% 0%;">
							<button type="button" class="btn" onclick="location.href=''">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
							</button>
						</div>
					</div>
				</form>
			@endcomponent

			{{-- モーダル：追加ボタン --}}
			@component('components.elements.modal.add', ['title'=>'個人予算追加'])

				<?php
				$projects = ['社内行事・その他'];
				?>
				@component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
					プロジェクト名
				@endcomponent

				<?php
				$users = ['佐々木希','櫻井翔','松本潤'];
				?>
				@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
					担当者
				@endcomponent

				@component('components.elements.form.modal.text',['name'=>'personal_budget'])
					個人予算
				@endcomponent
			@endcomponent

			{{-- モーダル：編集ボタン --}}
			@component('components.elements.modal.update', ['title'=>'編集'])
				<?php
				$projects = ['社内行事・その他'];
				?>
				@component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
					プロジェクト名
				@endcomponent

				<?php
				$users = ['佐々木希','櫻井翔','松本潤'];
				?>
				@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
					担当者
				@endcomponent

				@component('components.elements.form.modal.text',['name'=>'personal_budget'])
					個人予算
				@endcomponent
			@endcomponent



			{{-- 一覧 --}}
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
						<button class="btn btn-default">
							<span class="glyphicon glyphicon-print"> 出力</span>
						</button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover">
						<thead>
							<tr class="active">
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
							<tr>
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
							<tr>
								<td>イギリス計画</td>
								<td>佐々木希</td>
								<td align="right">4,000,000</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
						</tbody>
					</table>
					@component('components.elements.table.admin.pagination')
					@endcomponent
					{{--<div class="text-center">--}}
						{{--<nav class="pagination">--}}
							{{--<ul class="pagination">--}}
								{{--<li>--}}
									{{--<a href="#" aria-label="前のページへ">--}}
										{{--<span aria-hidden="true">«</span>--}}
									{{--</a>--}}
								{{--</li>--}}
								{{--<li class="active"><a href="#">1</a></li>--}}
								{{--<li><a href="#">2</a></li>--}}
								{{--<li><a href="#">3</a></li>--}}
								{{--<li><a href="#">4</a></li>--}}
								{{--<li><a href="#">5</a></li>--}}
								{{--<li>--}}
									{{--<a href="#" aria-label="次のページへ">--}}
										{{--<span aria-hidden="true">»</span>--}}
									{{--</a>--}}
								{{--</li>--}}
							{{--</ul>--}}
						{{--</nav>--}}
					{{--</div>--}}
				</div>
			</div>
		</div>
	</div>
	{{-- PC版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.project.side-menu')
	</div>
</div>
@endsection