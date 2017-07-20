@extends('layouts.app')

@section('title')
	プロジェクト一覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="page-header">
			<h3>
				<i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;プロジェクト一覧
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
				@include('layouts.content.project.xs-side-menu')
			</div>
		</div>

		{{-- アコーディオン：検索ボタン --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="collapse" id="search" style="margin:1% 1%;">
					<div class="panel panel-default">
						<div class="panel-body">
							<form class="form-horizontal">
								<div class="form-group">
                                    <?php
                                    $projects = ['社内ログ管理システム','株式会社リゾーム','株式会社アシックス'];
                                    ?>
									@component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
										プロジェクト名
									@endcomponent

                                    <?php
                                    $users = ['佐々木希','櫻井翔','松本潤'];
                                    ?>
									@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
										責任者
									@endcomponent

                                    <?php
                                    $departments = ['システムデザイン','コンセプトデザイン','サポート'];
                                    ?>
									@component('components.elements.form.select.select', ['items'=>$departments,'search'=>'false'])
										部門
									@endcomponent
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">表示区分</label>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">全て
										</label>
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">完了
										</label>
										<label class="radio-inline">
											<input type="radio" name="project_status" value="">未完了
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">期間</label>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class='input-group day'>
											<input type='text' class="form-control" placeholder="開始日" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
									<label class="col-xs-1 col-sm-1 col-md-1 col-lg-1 control-label" style="text-align: center">～</label>
									<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class='input-group day'>
											<input type='text' class="form-control" placeholder="終了日" />
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
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

			{{-- モーダル：追加ボタン --}}
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="modal fade" id="add" tabindex="-1">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="margin:2% 0%;">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">プロジェクト追加</h4>
								</div>
								<form class="form-horizontal">
									<div class="modal-body">
										@component('components.elements.form.modal.text',['name'=>'name'])
											プロジェクト名
										@endcomponent
											<div class="form-group">
												<label class="col-xs-3 control-label" for="customer_type">クライアント種類<span class="text-danger">*</span></label>
												<div class="col-xs-8">
													<label class="radio-inline">
														<input type="radio" name="project_status" value="">エンド
													</label>
													<label class="radio-inline">
														<input type="radio" name="project_status" value="">プライマリ
													</label>
												</div>
											</div>
										<?php
										$users = ['田中咲良','呉傑','山本耕史郎'];
										?>
										@component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
											責任者
										@endcomponent

										@component('components.elements.form.modal.text',['name'=>'contract_money'])
											受注金額
										@endcomponent

										@component('components.elements.form.modal.text',['name'=>'budget'])
											実行予算
										@endcomponent
										<div class="form-group">
											<label class="col-xs-3 control-label" for="started_day">開始日</label>
											<div class="col-xs-8">
												<div class='input-group day'>
													<input type='text' class="form-control"/>
													<span class="input-group-addon">
														 <span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="ended_day">完了予定日</label>
											<div class="col-xs-8">
												<div class='input-group day'>
													<input type='text' class="form-control"/>
													<span class="input-group-addon">
														 <span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="ended_time">完了日</label>
											<div class="col-xs-8">
												<div class='input-group day'>
													<input type='text' class="form-control"/>
													<span class="input-group-addon">
														 <span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="note">備考</label>
											<div class="col-xs-8">
												<textarea class="form-control" rows="3" id="note"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-xs-3 control-label" for="non-display_flag">非表示フラグ</label>
											<div class="col-xs-8 checkbox" style="margin-left: 20px;">
												<input type="checkbox" value="1" >
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
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="row" style="margin: 0% 1%;">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>ID</th>
								<th>プロジェクト名</th>
								<th style="width: 86px">責任者</th>
								<th style="width: 76px">受注金額</th>
								<th style="width: 86px">実行予算</th>
								<th>開始日</th>
								<th style="width: 91px">完了予定日</th>
								<th>完了日</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>PCP・メンズポケットサーバー移行</td>
								<td>田中咲良</td>
								<td>2,500</td>
								<td>システム</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">2</th>
								<td></td>
								<td>呉傑</td>
								<td>2,500</td>
								<td>システム</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">3</th>
								<td></td>
								<td>山本耕史郎</td>
								<td>2,500</td>
								<td>システム</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">4</th>
								<td></td>
								<td>木村拓哉</td>
								<td>2,500</td>
								<td>コンセプト</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">5</th>
								<td></td>
								<td>中居正広</td>
								<td>2,500</td>
								<td>サポート</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">6</th>
								<td></td>
								<td>稲垣吾郎</td>
								<td>2,500</td>
								<td>サポート</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">7</th>
								<td></td>
								<td>香取慎吾</td>
								<td>2,500</td>
								<td>サポート</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">8</th>
								<td></td>
								<td>草彅剛</td>
								<td>2,500</td>
								<td>サポート</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">9</th>
								<td></td>
								<td>新垣結衣</td>
								<td>2,500</td>
								<td>サポート</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
							<tr>
								<th scope="row">10</th>
								<td></td>
								<td>北乃きい</td>
								<td>2,500</td>
								<td>サポート</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
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
	{{-- スマホ版サイドメニュー --}}
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		@include('layouts.content.project.side-menu')
	</div>
</div>
@endsection
