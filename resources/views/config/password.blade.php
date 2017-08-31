@extends('layouts.app')

@section('title')
    パスワード変更
@endsection

@section('content')



{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<div>
				<h2>PASSWORD RESET</h2>
			</div>
		</div>
	</div>
</div>


{{-- コンテンツ --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

		{{-- PC版サイドメニュー --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				@include('layouts.content.config.xs-side-menu')
			</div>
		</div>

		{{-- 一覧 --}}
		<div class="row" style="margin: 0% 1%;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="{{ route('password.edit') }}" method="POST" >
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									@component('components.elements.form.password', ['name' => 'old_password'])
										現在のパスワード
									@endcomponent
									@component('components.elements.form.password', ['name' => 'password'])
										新しいパスワード
									@endcomponent
									@component('components.elements.form.password', ['name' => 'password_confirmation'])
										パスワード確認
									@endcomponent
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="text-right">
										<button type="submit" class="btn btn-primary">編集</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.config.side-menu')
	</div>
</div>
@endsection
