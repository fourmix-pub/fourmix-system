@extends('layouts.app')

@section('title')
    集計表
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h3>
                <i class="fa fa-th-list" aria-hidden="true"></i>&nbsp;&nbsp;集計表
            </h3>
        </div>
    </div>
</div>

{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

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
                        <div class="panel panel-default">
                            <div class="panel-body">
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

                                    @component('components.elements.form.select.select', ['items'=>$departments,'search'=>'true'])
                                        部門
                                    @endcomponent

                                    <?php
                                    $categories=['調査','実装','テスト']
                                    ?>

                                    @component('components.elements.form.select.select', ['items'=>$categories,'search'=>'true'])
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
                            </div>
                        </div>
                        <hr Width="100%">
                    </div>
                </div>

                {{-- 一覧 --}}
                <div class="row total-view" style="margin: 0% 1%;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="text-center">
                            プロジェクト別作業分類集計表
                            <br>
                            <small>プロジェクト：J-BEC　　責任者：金子聡</small>
                        </h3>

                        <div align="right">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                            </button>
                        </div>
                        <br>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr class="active">
                                    <th>作業分類</th>
                                    <th>作業時間</th>
                                    <th>作業金額</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>調査</td>
                                    <td>30.00</td>
                                    <td align="right">￥100,000</td>
                                </tr>
                                <tr>
                                    <td>設計</td>
                                    <td>30.00</td>
                                    <td align="right">￥100,000</td>
                                </tr>
                                <tr>
                                    <td>打ち合わせ</td>
                                    <td>30.00</td>
                                    <td align="right">￥100,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">合計</th>
                                    <td>90.00</td>
                                    <td align="right">￥300,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <br>
                <hr Width="100%">
                <br>

                <div class="row total-view" style="margin: 0% 1%;" >
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="text-center">
                            プロジェクト別担当者集計表
                            <br>
                            <small>プロジェクト：SES・Fivestartoto　　責任者：金子聡</small>
                        </h3>

                        <div align="right">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                            </button>
                        </div>
                        <br>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr class="active">
                                    <th>担当者</th>
                                    <th>作業時間</th>
                                    <th>作業金額</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>山本耕史郎</td>
                                    <td>30.00</td>
                                    <td align="right">￥100,000</td>
                                </tr>
                                <tr>
                                    <td>田中咲良</td>
                                    <td>30.00</td>
                                    <td align="right">￥100,000</td>
                                </tr>
                                <tr>
                                    <td>呉傑</td>
                                    <td>30.00</td>
                                    <td align="right">￥100,000</td>
                                </tr>
                                <tr>
                                    <th scope="row">合計</th>
                                    <td>90.00</td>
                                    <td align="right">￥300,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <br>
                <hr Width="100%">
                <br>

                <div class="row total-view" style="margin: 0% 1%;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="text-center">
                            担当者別作業分類集計表
                            <br>
                            <small>担当者：呉傑　部門：システムデザイン</small>
                        </h3>

                        <div align="right">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                            </button>
                        </div>
                        <br>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="active">
                                        <th>作業分類</th>
                                        <th>作業時間</th>
                                        <th>作業金額</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>調査</td>
                                        <td>30.00</td>
                                        <td align="right">￥100,000</td>
                                    </tr>
                                    <tr>
                                        <td>設計</td>
                                        <td>30.00</td>
                                        <td align="right">￥100,000</td>
                                    </tr>
                                    <tr>
                                        <td>打ち合わせ</td>
                                        <td>30.00</td>
                                        <td align="right">￥100,000</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">合計</th>
                                        <td>90.00</td>
                                        <td align="right">￥300,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <br>
                <hr Width="100%">
                <br>

                <div class="row total-view" style="margin: 0% 1%;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="text-center">
                            担当者別プロジェクト集計表
                            <br>
                            <small>担当者：呉傑　　部門：システムデザイン</small>
                        </h3>

                        <div align="right">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                            </button>
                        </div>
                        <br>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="active">
                                    <th>プロジェクト</th>
                                    <th>作業時間</th>
                                    <th>作業金額</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>社内行事・その他</td>
                                        <td>30.00</td>
                                        <td align="right">￥100,000</td>
                                    </tr>
                                    <tr>
                                        <td>日科技連サイト構築</td>
                                        <td>30.00</td>
                                        <td align="right">￥100,000</td>
                                    </tr>
                                    <tr>
                                        <td>Win</td>
                                        <td>30.00</td>
                                        <td align="right">￥100,000</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">合計</th>
                                        <td>90.00</td>
                                        <td align="right">￥300,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                @component('components.elements.table.admin.pagination')
                @endcomponent
            </div>

            {{--スマホ版サイドメニュー--}}
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                @include('layouts.content.daily.side-menu')
            </div>
        </div>

    </div>
</div>

@endsection