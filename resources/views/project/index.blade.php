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
				<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;" data-toggle="collapse" href="#search">
					<i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
				</button>
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

		{{-- SM版サイドメニュー --}}
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				@include('layouts.content.project.xs-side-menu')
			</div>
		</div>

		{{-- モーダル：削除ボタン --}}
		@component('components.elements.modal.delete')
		@endcomponent

		{{-- アコーディオン：検索ボタン --}}
		<div class="row">
			@component('components.elements.accordion.accordion')
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
					@component('components.elements.form.period')
					@endcomponent
					<div class="row text-center">
						<div class="btn-group" style="margin:2% 0% 0% 0%;">
							<button type="button" class="btn" onclick="location.href=''">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
							</button>
						</div>
					</div>
				</form>
			@endcomponent

				{{-- モーダル：追加ボタン --}}
				@component('components.elements.modal.add', ['title'=>'プロジェクト追加'])
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
					@component('components.elements.form.modal.day')
						開始日
					@endcomponent

					@component('components.elements.form.modal.day')
						完了予定日
					@endcomponent

					@component('components.elements.form.modal.day')
						完了日
					@endcomponent
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
				@endcomponent

				{{-- モーダル：編集ボタン --}}
				@component('components.elements.modal.update', ['title'=>'編集'])
					@component('components.elements.form.modal.text',['name'=>'name'])

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

					@component('components.elements.form.modal.day')
						開始日
					@endcomponent

					@component('components.elements.form.modal.day')
						完了予定日
					@endcomponent

					@component('components.elements.form.modal.day')
						完了日
					@endcomponent
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
				@endcomponent



			{{-- 一覧 --}}
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<table class="table table-bordered table-hover">
						<thead>
							<tr class="active">
								<th>ID</th>
								<th>プロジェクト名</th>
								<th style="width: 86px">責任者</th>
								<th style="width: 76px">受注金額</th>
								<th style="width: 76px">実行予算</th>
								<th>開始日</th>
								<th style="width: 91px">完了予定日</th>
								<th>完了日</th>
								<th style="width: 105px"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>PCP・メンズポケットサーバー移行</td>
								<td>田中咲良</td>
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
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
								<td align="right">2,500</td>
								<td align="right">2,500</td>
								<td>2014/12/1</td>
								<td>2015/4/1</td>
								<td>2015/7/31</td>
								@component('components.elements.table.admin.button')
								@endcomponent
							</tr>
						</tbody>
					</table>
					@component('components.elements.table.admin.pagination')
					@endcomponent
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
