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
				<h2><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;プロフィール</h2>
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
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row" style="margin: 0% 1%;">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>名前</th>
							<th>作業単価</th>
							<th>部署</th>
							<th>退職</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>田中咲良</td>
							<td>2,500</td>
							<td>システム</td>
							<td></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>呉傑</td>
							<td>2,500</td>
							<td>システム</td>
							<td></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　>
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>山本耕史郎</td>
							<td>2,500</td>
							<td>システム</td>
							<td></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">4</th>
							<td>木村拓哉</td>
							<td>2,500</td>
							<td>コンセプト</td>
							<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>中居正広</td>
							<td>2,500</td>
							<td>サポート</td>
							<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">6</th>
							<td>稲垣吾郎</td>
							<td>2,500</td>
							<td>サポート</td>
							<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">7</th>
							<td>香取慎吾</td>
							<td>2,500</td>
							<td>サポート</td>
							<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">8</th>
							<td>草彅剛</td>
							<td>2,500</td>
							<td>サポート</td>
							<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">9</th>
							<td>新垣結衣</td>
							<td>2,500</td>
							<td>サポート</td>
							<td></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
						<tr>
							<th scope="row">10</th>
							<td>北乃きい</td>
							<td>2,500</td>
							<td>サポート</td>
							<td></td>
							<td align="center">
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</button>
								<button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
					</tbody>
					{{-- <tfoot>
						<tr>
							<td colspan="6" align="center">
								<nav class="pagination text-right">
									<ul class="pagination">
										<li>
											<a href="#" aria-label="前のページへ">
												<span aria-hidden="true">«</span>
											</a>
										</li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li>
											<a href="#" aria-label="次のページへ">
												<span aria-hidden="true">»</span>
											</a>
										</li>
									</ul>
								</nav>
							</td>
						</tr>
					</tfoot> --}}
				</table>
			</div>
		</div>

	</div>

	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.config.side-menu')
	</div>
</div>
@endsection
