@extends('layouts.app')

@section('title')
    プロフィール設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<div>
				<h2>PROFILE</h2>
			</div>
		</div>
	</div>
</div>


{{-- コンテンツ --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

		{{-- SP 版サイドメニュー --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				@include('layouts.content.config.xs-side-menu')
			</div>
		</div>

		{{-- 一覧 --}}
		<div class="row" style="margin: 0% 1%;">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-default">

					<form class="panel-body" action="{{ route('update-profile', compact('user')) }}" method="POST">
						{{ method_field('PATCH') }}
						{{ csrf_field() }}
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
								@component('components.elements.form.user', ['name' => 'name', 'value' => $user->name])
									ユーザー名
								@endcomponent
								@component('components.elements.form.user', ['name' => 'email', 'value' => $user->email])
									メールアドレス
								@endcomponent
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label for="name" class="control-label">始業時刻</label>
											<div class='input-group time'>
												<input type='text' class="form-control" value="{{ $user->start }}" name="start" />
												<span class="input-group-addon">
											<span class="glyphicon glyphicon-time"></span>
										</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group">
											<label for="name" class="control-label">終業時刻</label>
											<div class='input-group time'>
												<input type='text' class="form-control" value="{{ $user->end }}" name="end" />
												<span class="input-group-addon">
											<span class="glyphicon glyphicon-time"></span>
										</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-0 col-sm-0 col-md-4 col-lg-4">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="text-right">
									<button type="submit" class="btn btn-primary">登録</button>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>

	{{-- PC版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.config.side-menu')
	</div>
</div>
@endsection
