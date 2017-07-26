@extends('layouts.app')

@section('title')
	個人予算一覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				PERSONAL BUDGET LIST

			</h2>
		</div>
	</div>
</div>

{{-- コンテンツ --}}{{--xxx 検索ボタン元の位置--}}
{{--<div class="row">--}}
	{{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
	{{--</div>--}}
{{--</div>--}}
{{--<br>--}}

{{-- モーダル：削除ボタン --}}
@component('components.elements.modal.delete',['title'=>'プロジェクト削除'])
	日本計画
@endcomponent

{{-- モーダル：追加ボタン --}}
@component('components.elements.modal.add', ['title'=>'個人予算追加'])

	@php
	$projects = ['社内行事・その他'];
	@endphp
	@component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
		プロジェクト名
	@endcomponent

	@php
	$users = ['佐々木希','櫻井翔','松本潤'];
	@endphp
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


{{-- ボタン --}}
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
				<button class="btn btn-default print-budget pull-right">
					<span class="glyphicon glyphicon-print"> 出力</span>
				</button>
				<button type="button" class="btn btn-primary pull-right" style="margin-right: 10px;" data-toggle="collapse" href="#search">
					<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
				</button>
				<button type="button" class="btn btn-danger" style="margin-right: 10px;" data-toggle="modal" data-target="#add">
					<i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
				</button>
			</div>
		</div>
<br>
		{{-- アコーディオン：検索ボタン --}}
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
					@component('components.elements.form.select.select', ['items'=>$departments,'search'=>'true'])
						部門
					@endcomponent
				</div>
				<div class="row text-center">
					<div class="btn-group">
						<button type="button" class="btn" onclick="location.href=''">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
						</button>
					</div>
				</div>
			</form>
		@endcomponent

		{{-- 一覧 --}}
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
	</div>
@endsection