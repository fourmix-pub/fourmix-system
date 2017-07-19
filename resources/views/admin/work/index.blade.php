@extends('layouts.app')

@section('title')
	勤務設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h3>
				<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;勤務分類設定
				<button type="button" class="btn btn-danger pull-right" style="margin-right: 15%;" data-toggle="modal" data-target="#add">
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

	   {{-- モーダル：追加ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="modal fade" id="add" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header" style="margin:2% 0%;">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">作業分類追加</h4>
							</div>
							<form class="form-horizontal">
								<div class="modal-body">
									<div class="form-group">
										<label class="col-xs-3 control-label" for="service">勤務分類名<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="service"  placeholder="作業分類名" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-xs-3 control-label" for="cost_rate">単価掛率<span class="text-danger">*</span></label>
										<div class="col-xs-8">
											<input type="text" class="form-control" id="cost_rate"  placeholder="単価掛率" />
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
									<button type="button" class="btn btn-primary"　 data-dismiss="modal">登録</button>
								</div>
							</form>
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
                        $theads=['ID','勤務分類','単価掛率',''];

                        $tbody1=['id'=>1,'work'=>'普通勤務','cost_rate'=>'1.00'];
                        $tbody2=['id'=>2,'work'=>'休日勤務','cost_rate'=>'1.25'];
                        $tbody3=['id'=>3,'work'=>'普通残業','cost_rate'=>'1.25'];
                        $tbody4=['id'=>4,'work'=>'深夜残業','cost_rate'=>'1.50'];

                        $tbodys=[$tbody1,$tbody2,$tbody3,$tbody4];
                        ?>

						@component('components.elements.table.admin.thead',['theads'=>$theads])
						@endcomponent

						<tbody>
							@foreach($tbodys as $tbody)
							<tr>
								<th scope="row">{{ $tbody['id'] }}</th>
								<td>{{ $tbody['work'] }}</td>
								<td align="right">{{ $tbody['cost_rate'] }}</td>
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