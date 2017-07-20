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
				<h3><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;プロフィール</h3>
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

					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

									@component('components.elements.form.user', ['name' => 'name'])
										ユーザー名
									@endcomponent
									@component('components.elements.form.user', ['name' => 'mail'])
										メールアドレス
									@endcomponent
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
											<div class="form-group">
												<h3><small>始業時刻</small></h3>
												<div class='input-group time'>
													<input type='text' class="form-control" value="09:30" />
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
												<h3><small>終業時刻</small></h3>
												<div class='input-group time'>
													<input type='text' class="form-control" value="18:30" />
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
					</div>
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
