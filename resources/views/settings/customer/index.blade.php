@extends('layouts.app')

@section('title')
	顧客設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				CUSTOMERS
			</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;" data-toggle="collapse" href="#search">
			<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
		</button>
		<button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal" data-target="#add">
			<i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
		</button>
	</div>
</div>

<br>

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
		@component('components.elements.accordion.accordion')
			<form class="form-horizontal">
				<?php
				$users = ['株式会社キャリアデザインセンター','株式会社リゾーム','株式会社アシックス'];
				?>
				@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
					企業名
				@endcomponent

				<div class="form-group">
					<label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">クライアント種類</label>
					<label class="visible-xs col-xs-12 control-label">クライアント種類</label>

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<label class="checkbox-inline">
							<input type="checkbox" value=""> エンド
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value=""> プライマリ
						</label>
					</div>
					<div class="col-sm-1"></div>
				</div>

				<div class="row form text-center">
					<div class="btn-group" style="margin:2% 0% 0% 0%;">
						<button type="button" class="btn" onclick="location.href=''">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
						</button>
					</div>
				</div>
			</form>
		@endcomponent

		{{-- モーダル：追加ボタン --}}
		@component('components.elements.modal.add', ['title'=>'顧客追加'])
			@component('components.elements.form.modal.text',['name'=>'name'])
				企業名
			@endcomponent
			<div class="form-group">
				<label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">クライアント種類</label>
				<label class="visible-xs col-xs-12 control-label">クライアント種類</label>

				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> エンド
					</label>
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> プライマリ
					</label>
				</div>
				<div class="col-sm-1"></div>
			</div>
		@endcomponent

		{{-- モーダル：編集ボタン --}}
		@component('components.elements.modal.update', ['title'=>'顧客編集'])
			@component('components.elements.form.modal.text',['name'=>'name'])
				企業名
			@endcomponent
			<div class="form-group">
				<label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">クライアント種類</label>
				<label class="visible-xs col-xs-12 control-label">クライアント種類</label>

				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> エンド
					</label>
					<label class="radio-inline">
						<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> プライマリ
					</label>
				</div>
				<div class="col-sm-1"></div>
			</div>
		@endcomponent

		{{-- モーダル：削除ボタン --}}
		@component('components.elements.modal.delete', ['title'=>'顧客削除'])
			株式会社キャリアデザインセンター
		@endcomponent

		{{-- 一覧 --}}

		@component('components.elements.table.admin.table')
			@component('components.elements.table.admin.thead')
				<th>ID</th>
				<th>企業名</th>
				<th>クライアント種類</th>
				<th></th>
			@endcomponent
			<tbody>
				@foreach($customers as $customer)
				<tr>
					<th scope="row">{{ $customer->id }}</th>
					<td>{{ $customer->name }}</td>
					<td>{{ $customer->type_id }}</td>
					<td></td>
					<td></td>
				</tr>
				@endforeach
			</tbody>
		@endcomponent
	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection
