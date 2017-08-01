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
		{{-- モーダル：追加ボタン --}}
		@include('layouts.customers.create')
		{{--<button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal" data-target="#add">--}}
			{{--<i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>--}}
		{{--</button>--}}
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
		@component('components.accordions.accordion')
			<form class="form-horizontal">
				<?php
				$users = ['株式会社キャリアデザインセンター','株式会社リゾーム','株式会社アシックス'];
				?>
				@component('components.elements.form.select', ['items'=>$users,'search'=>'true'])
					企業名
				@endcomponent

				<div class="form-group">
					<label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">クライアント種類</label>
					<label class="visible-xs col-xs-12 control-label">クライアント種類</label>

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						@foreach(config('system.customer.name') as $key => $value)
						<label class="checkbox-inline">
							<input type="checkbox" value="{{ $key }}"> {{ $value }}
						</label>
						@endforeach
					</div>
					<div class="col-sm-1"></div>
				</div>

				<div class="row form text-center">
					<div class="btn-group">
						<button type="button" class="btn" onclick="location.href=''">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
						</button>
					</div>
				</div>
			</form>
		@endcomponent

		{{-- 一覧 --}}

		@component('components.elements.table.setting.table')
			@slot('thead')
				<th>ID</th>
				<th>企業名</th>
				<th>クライアント種類</th>
				<th></th>
			@endslot
			@slot('tbody')
				@foreach($customers as $customer)
				<tr>
					<th scope="row">{{ $customer->id }}</th>
					<td>{{ $customer->name }}</td>
					<td>{{ config('system.customer.name.'.$customer->type_id) }}</td>
					<td>
						@include('layouts.customers.edit')
						@include('layouts.customers.delete')
					</td>
				</tr>
				@endforeach
			@endslot
		@endcomponent
	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection
