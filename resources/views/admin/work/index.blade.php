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

		{{-- PC版サイドメニュー --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				@include('layouts.content.setting.xs-side-menu')
			</div>
		</div>

	   {{-- モーダル：追加ボタン --}}
		@component('components.elements.modal.add', ['title'=>'勤務分類追加'])
			@component('components.elements.form.modal.text',['name'=>'name'])
				勤務分類名
			@endcomponent

			@component('components.elements.form.modal.text',['name'=>'cost_rate'])
				単価掛率
			@endcomponent
		@endcomponent

		{{-- モーダル：編集ボタン --}}
		@component('components.elements.modal.update', ['title'=>'勤務分類編集'])
			@component('components.elements.form.modal.text',['name'=>'name'])
				勤務分類名
			@endcomponent

			@component('components.elements.form.modal.text',['name'=>'cost_rate'])
				単価掛率
			@endcomponent
		@endcomponent

		{{-- モーダル：削除ボタン --}}
		@component('components.elements.modal.delete', ['title'=>'勤務分類削除'])
			深夜残業
		@endcomponent

		{{-- 一覧 --}}
		@component('components.elements.table.admin.table')

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
		@endcomponent
	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.setting.side-menu')
	</div>
</div>
@endsection