@extends('layouts.app')

@section('title')
    日報閲覧
@endsection

@section('content')

    {{-- タイトル --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <div>
                    <h2><i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;日報閲覧</h2>
                </div>

                <div class="container">
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                    </button>
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
                                            <div class='input-group date datetimepicker1 started_day'>
                                                <input type='text' class="form-control" placeholder="開始日" />
                                                <span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
                                            </div>
                                        </div>
                                        <label class="col-xs-1 col-sm-1 col-md-1 col-lg-1 control-label" style="text-align: center">～</label>
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                            <div class='input-group date datetimepicker1 started_day'>
                                                <input type='text' class="form-control" placeholder="終了日" />
                                                <span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            $(function () {
                                                $('.datetimepicker1').datetimepicker({
                                                    format : 'YYYY-MM-DD',
                                                    locale : 'ja',
                                                    dayViewHeaderFormat : 'YYYY年M月'
                                                });
                                            });
                                        </script>
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
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>担当者</th>
                                <th>日付</th>
                                <th>プロジェクト名</th>
                                <th>作業分類</th>
                                <th>作業時間</th>
                                <th>作業金額</th>
                                <th>アクション</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>田中咲良</td>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>8.25</td>
                                <td>20,000</td>
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
                                <td>田中咲良</td>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>8.25</td>
                                <td>20,000</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="7" align="center">
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
            @include('layouts.content.daily.side-menu')
        </div>
    </div>
@endsection