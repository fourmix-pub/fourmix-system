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
		@include('layouts.customers.add')
	</div>
</div>

<br>

{{-- コンテンツ --}}
@component('components.grids.12-12-9-9')
	@slot('side')
		@include('layouts.content.setting.side-menu')
	@endslot
	{{-- SM版サイドメニュー --}}
	@include('layouts.content.setting.xs-side-menu')

	{{-- アコーディオン：検索ボタン --}}
	@include('layouts.customers.search')

	{{-- 一覧 --}}
	@include('layouts.customers.list')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
			{{ $customers->links() }}
		</div>
	</div>
@endcomponent
@endsection