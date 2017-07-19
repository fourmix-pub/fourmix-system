@extends('layouts.app')

@section('title')
	担当者設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h3>
				<i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;担当者
				<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
				</button>
				<button type="button" class="btn btn-danger pull-right" style="margin-right: 5%;" data-toggle="modal" data-target="#add">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;追加
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
				@include('layouts.content.setting.xs-side-menu')
			</div>
		</div>

		{{-- アコーディオン：検索ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="collapse" id="search"　style="margin:1% 1%;">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">担当者</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<select class="selectpicker" data-width="100%" data-live-search="true" title="担当者">
											<option data-tokens="">櫻井翔</option>
											<option data-tokens="">佐々木希</option>
										</select>
									</div>
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
								</div>
								<div class="row text-center">
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
		</div>

		{{-- モーダル：追加ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="modal fade" id="add" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="margin:2% 0%;">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">担当者追加</h4>
							</div>
							<form class="form-horizontal">
								<div class="modal-body">

									@component('components.elements.form.modal.text',['name'=>'name'])
										担当者
									@endcomponent

									@component('components.elements.form.modal.text',['name'=>'cost'])
										作業単価
									@endcomponent

									<div class="form-group">
										<label class="col-xs-3 control-label" for="department">部門<span class="text-danger">*</span></label>
											<select class="selectpicker col-xs-8" title="部門"　id="department">
												<option>システムデザイン</option>
												<option>コンセプトデザイン</option>
												<option>サポート</option>
											</select>
									</div>

									@component('components.elements.form.modal.text',['name'=>'mail'])
										メールアドレス
									@endcomponent

									<div class="form-group">
										<label class="col-xs-3 control-label" for="started_time">始業時刻<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<div class='input-group time'>
												<input type='text' class="form-control" value="09:30" />
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="ended_time">終業時刻<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<div class='input-group time'>
												<input type='text' class="form-control" value="18:30"/>
												<span class="input-group-addon">
													<span class="glyphicon glyphicon-time"></span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</form>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
								<button type="button" class="btn btn-primary"　 data-dismiss="modal">登録</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		{{-- 一覧 --}}
		<div class="row" style="margin: 0% 1%;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered">

						<?php
						$theads=['ID','名前','作業単価','部署','退職',''];

						$tbody1=['id'=>1,'user'=>'田中咲良','cost'=>'2500','department'=>'システム','resignation'=>''];
						$tbody2=['id'=>2,'user'=>'呉傑','cost'=>'2500','department'=>'システム','resignation'=>''];
						$tbody3=['id'=>3,'user'=>'山本耕史郎','cost'=>'2500','department'=>'システム','resignation'=>'✔️'];
						$tbody4=['id'=>4,'user'=>'木村拓哉','cost'=>'5000','department'=>'コンセプト','resignation'=>''];
						$tbody5=['id'=>5,'user'=>'草なぎ剛','cost'=>'7000','department'=>'サポート','resignation'=>'✔️'];

						$tbodys=[$tbody1,$tbody2,$tbody3,$tbody4,$tbody5];
						?>

						@component('components.elements.table.admin.thead',['theads'=>$theads])
						@endcomponent

						<tbody>
							@foreach($tbodys as $tbody)
								<tr>
									<th scope="row"><p>{{ $tbody['id'] }}</p></th>
									<td><p>{{ $tbody['user'] }}</p></td>
									<td align="right">{{ $tbody['cost'] }}</td>
									<td>{{ $tbody['department'] }}</td>
									<td align="center">{{ $tbody['resignation'] }}</td>
									@component('components.elements.table.admin.button')
									@endcomponent
								</tr>
							@endforeach
						</tbody>

					</table>
				</div>

				@component('components.elements.table.admin.pagenation')
				@endcomponent
			</div>
		</div>
	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection