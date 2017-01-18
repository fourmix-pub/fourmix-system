@extends('layouts.app')

@section('title')
	担当者設定
@endsection

@section('content')
	<div class="row">
		<div class="container">

			@include('layouts.setting.header')

			{{-- タイトル --}}
			<div class="col-md-8">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="page-header">
						<h3>
							<i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;担当者
							<button type="button" class="btn btn-primary pull-right" style="margin: 0% 1%;"  data-toggle="collapse" href="#search">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
							</button>
							<button type="button" class="btn btn-danger pull-right" style="margin: 0% 1%;" data-toggle="modal" data-target="#add">
								<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;追加
							</button>
						</h3>
					</div>

					{{-- アコーディオン：検索ボタン --}}
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="collapse" id="search"　style="margin:1% 1%;">
							<div class="panel panel-default">
								<div class="panel-body">
										<form class="form-inline">
											<div class="row form text-center">
												<label class="sr-only" for="staff">担当者</label>
												<div class="btn-group" style="margin:1% 1%;">
													<input type="text" class="form-control" id="staff" style="width:180px" placeholder="担当者" />
												</div> 

												<label class="sr-only" for="department">部門</label>
												<div class="btn-group" style="margin:1% 1%;">
													<select class="selectpicker" title="部門"　id="department" style="width:180px">
														<option>システムデザイン</option>
														<option>コンセプトデザイン</option>
														<option>サポート</option>
													</select>
												</div>
												<div class="btn-group" >
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

					{{-- モーダル：追加ボタン --}}
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="modal fade" id="add" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="margin:1% 2%; ">
										<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
										<h4 class="modal-title">担当者追加</h4>
									</div>
									<div class="form-horizontal">
										<div class="row">
				                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				                                <div class="form-group">
				                                    <label class="col-xs-3 control-label" for="staff">担当者</label>
				                                    <div class="col-xs-8">
				                                        <input type="text" class="form-control" id="staff"  placeholder="担当者" />
				                                    </div>
				                                </div>
				                                <div class="form-group">
				                                    <label class="col-xs-3 control-label" for="unit_cost">作業単価</label>
				                                    <div class="col-xs-8">
				                                        <input type="text" class="form-control" id="unit_cost"  placeholder="作業単価" />
				                                    </div>
				                                </div>
				                                <div class="form-group">
					                                <label class="col-xs-3 control-label" for="department">部門</label>
						                                <select class="selectpicker col-xs-8" title="部門"　id="department">
															<option>システムデザイン</option>
															<option>コンセプトデザイン</option>
															<option>サポート</option>
														</select>
				                                </div>
				                                <div class="form-group">
				                                    <label class="col-xs-3 control-label" for="mail_address">メールアドレス</label>
				                                    <div class="col-xs-8">
				                                        <input type="text" class="form-control" id="mail_address"  placeholder="メールアドレス" />
				                                    </div>
				                                </div>
				                                <div class="form-group">
				                                    <label class="col-xs-3 control-label" for="started_time">始業時刻</label>
				                                    <div class="col-xs-8">
				                                        <input type="text" class="form-control" id="started_time"  placeholder="始業時刻" />
				                                    </div>
				                                </div>
				                                <div class="form-group">
				                                    <label class="col-xs-3 control-label" for="ended_time">終業時刻</label>
				                                    <div class="col-xs-8">
				                                        <input type="text" class="form-control" id="ended_time"  placeholder="終業時刻" />
				                                    </div>
				                                </div>
					                        </div>
					                    </div>
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
								<tfoot>
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
							  	</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
