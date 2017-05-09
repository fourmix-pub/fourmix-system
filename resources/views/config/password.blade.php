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
				<h2><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;パスワード変更</h2>
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
					    <form>
                            <div class="row">
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <h3><small>パスワード</small></h3>
                                        <input type="password" class="form-control" id="project"  placeholder="パスワード" />
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <h3><small>新しいパスワード</small></h3>
                                        <input type="password" class="form-control" id="project"  placeholder="新しいパスワード" />
                                    </div>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="form-group">
                                        <h3><small>パスワード確認</small></h3>
                                        <input type="password" class="form-control" id="project"  placeholder="パスワード確認" />
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">登録</button>
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
