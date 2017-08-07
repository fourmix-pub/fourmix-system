@extends('layouts.app')

@section('title')
	担当者設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h2>
				USERS
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
			@include('layouts.content.setting.xs-side-menu')
		</div>

		{{-- アコーディオン：検索ボタン --}}
		@component('components.elements.accordion.accordion')
			<form class="form-horizontal">

				{{--<?php--}}
				{{--$users = ['櫻井翔','佐々木希','田中さくら'];--}}
				{{--?>--}}
				{{--@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])--}}
					{{--担当者--}}
				{{--@endcomponent--}}

				{{--<?php--}}
				{{--$users = ['株式会社キャリアデザインセンター','株式会社リゾーム','株式会社アシックス'];--}}
				{{--?>--}}
				{{--@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])--}}
					{{--部門名--}}
				{{--@endcomponent--}}


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
		@component('components.elements.modal.add', ['title'=>'担当者追加'])

			@component('components.elements.form.modal.text',['name'=>'name'])
				担当者
			@endcomponent

			@component('components.elements.form.modal.text',['name'=>'cost'])
				作業単価
			@endcomponent

			@php
				$departments = ['システムデザイン','コンセプトデザイン','サポート'];
			@endphp
			@component('components.elements.form.select.select', ['items'=>$departments,'search'=>'true'])
				部門
			@endcomponent

			@component('components.elements.form.modal.text',['name'=>'mail'])
				メールアドレス
			@endcomponent

			@component('components.elements.form.modal.pass', ['name' => 'password'])
					パスワード
			@endcomponent

			@component('components.elements.form.modal.pass', ['name' => 'password_confirmation'])
				パスワード確認
			@endcomponent

			@component('components.elements.form.modal.time',['title'=>'始業時間','time'=>'09:30'])
			@endcomponent

			@component('components.elements.form.modal.time',['title'=>'終業時間','time'=>'18:30'])
			@endcomponent

		@endcomponent

		{{-- モーダル：編集ボタン --}}
		@component('components.elements.modal.update', ['title'=>'担当者編集'])

			@component('components.elements.form.modal.text',['name'=>'name'])
				担当者
			@endcomponent

			@component('components.elements.form.modal.text',['name'=>'cost'])
				作業単価
			@endcomponent

			@php
				$departments = ['システムデザイン','コンセプトデザイン','サポート'];
			@endphp
			@component('components.elements.form.select.select', ['items'=>$departments,'search'=>'true'])
				部門
			@endcomponent

			@component('components.elements.form.modal.text',['name'=>'mail'])
				メールアドレス
			@endcomponent

			@component('components.elements.form.modal.pass', ['name' => 'password'])
				パスワード
			@endcomponent

			@component('components.elements.form.modal.pass', ['name' => 'password_confirmation'])
				パスワード確認
			@endcomponent

			@component('components.elements.form.modal.time',['title'=>'始業時間','time'=>'09:30'])
			@endcomponent

			@component('components.elements.form.modal.time',['title'=>'終業時間','time'=>'18:30'])
			@endcomponent

		@endcomponent

		{{-- モーダル：削除ボタン --}}
		@component('components.elements.modal.delete', ['title'=>'担当者削除'])
			稲垣吾郎
		@endcomponent

		{{-- 一覧 --}}
		@component('components.elements.table.admin.table')

			<?php
			$theads=['ID','名前','作業単価','部署','退職',''];

			$tbody1=['id'=>1,'user'=>'田中咲良','cost'=>'2,500','department'=>'システム'];
			$tbody2=['id'=>2,'user'=>'呉傑','cost'=>'2,500','department'=>'システム'];
			$tbody3=['id'=>3,'user'=>'山本耕史郎','cost'=>'2,500','department'=>'システム'];
			$tbody4=['id'=>4,'user'=>'木村拓哉','cost'=>'5,000','department'=>'コンセプト'];
			$tbody5=['id'=>5,'user'=>'草なぎ剛','cost'=>'7,000','department'=>'サポート'];

			$tbodys=[$tbody1,$tbody2,$tbody3,$tbody4,$tbody5];
			?>

			@component('components.elements.table.admin.thead',['theads'=>$theads])
			@endcomponent

			<tbody>
				@foreach($tbodys as $tbody)
					<tr>
						<th scope="row">{{ $tbody['id'] }}</th>
						<td>{{ $tbody['user'] }}</td>
						<td align="right">{{ $tbody['cost'] }}</td>
						<td>{{ $tbody['department'] }}</td>
						<td align="center"></td>
						@component('components.elements.table.admin.button')
						@endcomponent
					</tr>
				@endforeach
				<tr>
					<th scope="row">6</th>
					<td>稲垣吾郎</td>
					<td align="right">8000</td>
					<td>サポート</td>
					<td align="center"><span class="glyphicon glyphicon-ok-circle" style="color: red; font-size: large"></span></td>
					@component('components.elements.table.admin.button')
					@endcomponent
				</tr>
				<tr>
					<th scope="row">7</th>
					<td>香取慎吾</td>
					<td align="right">8000</td>
					<td>システム</td>
					<td align="center"><span class="glyphicon glyphicon-ok-circle" style="color: red; font-size: large"></span></td>
					@component('components.elements.table.admin.button')
					@endcomponent
				</tr>
			</tbody>
		@endcomponent
	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>

</div>
@endsection