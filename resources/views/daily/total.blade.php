@extends('layouts.app')

@section('title')
    集計表
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h2>
                <i class="fa fa-th-list" aria-hidden="true"></i>&nbsp;&nbsp;集計表
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                </button>
            </h2>
        </div>
    </div>
</div>

{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

        {{-- PC版サイドメニュー --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('layouts.content.daily.xs-side-menu')
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
                                    <label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">担当者</label>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="担当者">
                                            <option data-tokens="">櫻井翔</option>
                                            <option data-tokens="">佐々木希</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">プロジェクト</label>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <select class="selectpicker" data-width="100%" data-live-search="true" title="プロジェクト">
                                            <option data-tokens="fourmix-system">社内ログ管理システム</option>
                                            <option data-tokens="rhizo-me">株式会社リゾーム</option>
                                            <option data-tokens="asics">株式会社アシックス</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">部門</label>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <select class="selectpicker" data-width="100%" title="部門">
                                            <option>システムデザイン</option>
                                            <option>コンセプトデザイン</option>
                                            <option>サポート</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">作業分類</label>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                        <select class="selectpicker" data-width="100%" title="作業分類">
                                            <option>調査</option>
                                            <option>実装</option>
                                            <option>調査</option>
                                        </select>
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

            {{-- 一覧 --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row" style="margin: 0% 1%;">
                    <h2 class="text-center">
                        プロジェクト別作業分類集計表<br>
                        <small>プロジェクト：J-BEC　　責任者：金子聡</small>
                    </h2>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                        </button>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>作業分類</th>
                            <th>作業時間</th>
                            <th>作業金額</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>調査</td>
                                <td>30.00</td>
                                <td>￥100,000</td>
                            </tr>
                            <tr>
                                <td>設計</td>
                                <td>30.00</td>
                                <td>￥100,000</td>
                            </tr>
                            <tr>
                                <td>打ち合わせ</td>
                                <td>30.00</td>
                                <td>￥100,000</td>
                            </tr>
                            <tr>
                                <th scope="row">合計</th>
                                <td>90.00</td>
                                <td>￥300,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <hr Width="100%">
                <br>
                <div class="row" style="margin: 0% 1%;">
                    <h2 class="text-center">
                        プロジェクト別担当者集計表<br>
                        <small>プロジェクト：SES・Fivestartoto　　責任者：金子聡</small>
                    </h2>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                        </button>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>担当者</th>
                            <th>作業時間</th>
                            <th>作業金額</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>山本耕史郎</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <td>田中咲良</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <td>呉傑</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <th scope="row">合計</th>
                            <td>90.00</td>
                            <td>￥300,000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <hr Width="100%">
                <br>
                <div class="row" style="margin: 0% 1%;">
                    <h2 class="text-center">
                        担当者別作業分類集計表<br>
                        <small>担当者：呉傑　　部門：システムデザイン</small>
                    </h2>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                        </button>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>作業分類</th>
                            <th>作業時間</th>
                            <th>作業金額</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>調査</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <td>設計</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <td>打ち合わせ</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <th scope="row">合計</th>
                            <td>90.00</td>
                            <td>￥300,000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <hr Width="100%">
                <br>
                <div class="row" style="margin: 0% 1%;">
                    <h2 class="text-center">
                        担当者別プロジェクト集計表<br>
                        <small>担当者：呉傑　　部門：システムデザイン</small>
                    </h2>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10"></div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <button class="btn btn-default">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                        </button>
                    </div>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>プロジェクト</th>
                            <th>作業時間</th>
                            <th>作業金額</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>社内行事・その他</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <td>日科技連サイト構築</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <td>Win</td>
                            <td>30.00</td>
                            <td>￥100,000</td>
                        </tr>
                        <tr>
                            <th scope="row">合計</th>
                            <td>90.00</td>
                            <td>￥300,000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     {{--スマホ版サイドメニュー--}}
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('layouts.content.daily.side-menu')
    </div>
</div>
@endsection