@extends('layouts.app')

@section('title')
    作業日報入力
@endsection

@section('content')

    {{-- タイトル --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <div>
                    <h2><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;作業日報入力</h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

        {{-- PC版サイドメニュー --}}
        {{--<div class="row">--}}
            {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
                {{--@include('layouts.content.daily.xs-side-menu')--}}
            {{--</div>--}}
        {{--</div>--}}

        {{-- 一覧 --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row" style="margin: 0% 1%;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>日付</th>
                            <th>プロジェクト名</th>
                            <th>作業</th>
                            <th width="11%">開始</th>
                            <th width="11%">終了</th>
                            <th width="8%">休憩</th>
                            <th>勤務</th>
                            <th width="15%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form>
                            <tr>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td>60</td>
                                <td>普通</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add" title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal" title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        </form>
                        <form>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td>60</td>
                                <td>普通</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add" title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal" title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        </form>
                        <form>
                            <tr>
                                <td>2016/08/21</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td>60</td>
                                <td>普通</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add" title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal" title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        </form>
                        <form>
                            <tr>
                                <td>2016/08/31</td>
                                <td>タリーズ</td>
                                <td>設計</td>
                                <td>09:30</td>
                                <td>20:00</td>
                                <td>60</td>
                                <td>普通</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add" title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal" title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                    {{-- ▼ 入力画面 ▼ --}}
                    <form action="#">
                        <table class="table field">
                            <tr>
                                <td>
                                    <input type='text' class="form-control day" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}" />
                                </td>
                                <td>
                                    <select class="selectpicker" data-width="100%" data-live-search="true" title="プロジェクト">
                                        <option data-tokens="fourmix-system">社内ログ管理システム</option>
                                        <option data-tokens="rhizo-me">株式会社リゾーム</option>
                                        <option data-tokens="asics">株式会社アシックス</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="selectpicker" data-width="100%" title="作業">
                                        <option>作業</option>
                                        <option>見積・営業活動</option>
                                        <option>分析</option>
                                    </select>
                                </td>
                                <td width="11%">
                                    <input type='text' class="form-control time" value="09:30" />
                                </td>
                                <td width="11%">
                                    <input type='text' class="form-control time" value="18:30" />
                                </td>
                                <td width="8%">
                                    <input type='text' class="form-control"  value="0" />
                                </td>
                                <td>
                                    <select class="selectpicker" data-width="100%" title="勤務">
                                        <option selected>通常</option>
                                        <option>残業</option>
                                        <option>休日</option>
                                    </select>
                                </td>
                                <td align="center" width="15%">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add" title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost trash_btn" data-toggle="modal" data-target="#myModal" title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr style="border-style: hidden none none;">
                                <td colspan="8">
                                    <textarea name="note" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄"></textarea>
                                </td>
                            </tr>
                        </table>
                        <table class="parent"></table>
                        <div class="text-right">
                            <button type="button" class="btn btn-default add_btn">行追加</button>
                            <button type="submit" class="btn btn-primary">登録</button>
                        </div>
                        <script>
                            $(function() {
                                "use strict";
                                var $content = $(".field");
                                $('.add_btn').click(function(){
                                    $content.clone(true).appendTo('.parent');
                                });
                                // コピー削除
                                $( '.parent' ).on( 'click', '.trash_btn', function() {
                                    $(this).parents('.field').remove();
                                });
                                // コピー元削除
                                $( '.trash_btn' ).click(function() {
                                    $(this).parents('.field').remove();
                                });
                            });
                        </script>
                    </form>
                    {{-- ▲ 入力画面 ▲ --}}
                </table>
            </div>
        </div>
    </div>
    {{-- スマホ版サイドメニュー --}}
    {{--<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">--}}
        {{--@include('layouts.content.daily.side-menu')--}}
    {{--</div>--}}
</div>
@endsection