@extends('layouts.app')

@section('title')
    日報閲覧
@endsection

@section('content')

    {{-- タイトル --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h3>
                    <i class="glyphicon glyphicon-eye-open"></i>&nbsp;&nbsp;日報閲覧
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                    </button>
                </h3>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

            {{-- モーダル：編集ボタン --}}
            @component('components.elements.modal.update', ['title'=>'日報編集'])
                @component('components.elements.form.modal.text',['name'=>'name'])
                    プロジェクト名
                @endcomponent
                @component('components.elements.form.modal.text',['name'=>'name'])
                    休憩時間
                @endcomponent
            @endcomponent

            {{-- モーダル：削除ボタン --}}
            @component('components.elements.modal.delete')
            @endcomponent

            {{-- PC版サイドメニュー --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @include('layouts.content.daily.xs-side-menu')
                </div>
            </div>

            {{-- アコーディオン：検索ボタン --}}
            <div class="row">
                @component('components.elements.accordion.accordion')

                    <form class="form-horizontal">
                        <?php
                        $users = ['佐々木希','櫻井翔','松本潤'];
                        ?>
                        @component('components.elements.form.select.select', ['items'=>$users,'search'=>'true'])
                            担当者
                        @endcomponent

                        <?php
                        $projects = ['社内ログ管理システム','株式会社リゾーム','株式会社アシックス'];
                        ?>
                        @component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
                            プロジェクト名
                        @endcomponent

                        <?php
                        $departments = ['システムデザイン','コンセプトデザイン','サポート'];
                        ?>
                        @component('components.elements.form.select.select', ['items'=>$departments,'search'=>'false'])
                            部門
                        @endcomponent

                        <?php
                        $categories=['調査','実装','テスト']
                        ?>
                        @component('components.elements.form.select.select', ['items'=>$categories,'search'=>'false'])
                            作業分類
                        @endcomponent

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
                                <th></th>
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
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td colspan="7">備考欄</td>
                            </tr>
                            <tr>
                                <td>田中咲良</td>
                                <td>2016/07/31</td>
                                <td>コメダコーヒー</td>
                                <td>設計</td>
                                <td>8.25</td>
                                <td>20,000</td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            <tr>
                                <td colspan="7">備考欄</td>
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