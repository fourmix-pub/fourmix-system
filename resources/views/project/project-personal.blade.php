@extends('layouts.app')

@section('title')
    プロジェクト予算対
@endsection

@section('content')

    {{-- タイトル --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h2>
                   PROJECT BUDGET
                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
                        <i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
                    </button>
                </h2>
            </div>
        </div>
    </div>
    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            {{-- PC版サイドメニュー --}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @include('layouts.content.project.xs-side-menu')
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="btn-group" role="group" aria-label="...">
                        <a type="button" class="btn btn-default" href="{{ url('/project-budget') }}">プロジェクト別</a>
                        <a type="button" class="btn btn-primary" href="{{ url('/project-personal') }}">個人別</a>
                        <a type="button" class="btn btn-default" href="{{ url('/project-personal-budget') }}">個人予算別</a>
                    </div>
                </div>
            </div>
            <br>

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
                            <label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">表示区分</label>
                            <label class="col-xs-12 visible-xs">表示区分</label>

                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
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
                            <div class="btn-group">
                                <button type="button" class="btn" onclick="location.href=''">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                                </button>
                            </div>
                        </div>
                    </form>
                @endcomponent

                {{-- 一覧 --}}
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="text-center">
                        <h3>プロジェクト予算対実績表（個人）</h3>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr class="active">
                            <th>プロジェクト</th>
                            <th>担当者</th>
                            <th>実績金額</th>
                            <th>予算残高</th>
                            <th>予算残％</th>
                            <th>状態</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>○○プロジェクト</td>
                            <td>櫻井翔</td>
                            <td align="right">3,000,000</td>
                            <td align="right">0</td>
                            <td align="right">33.3%</td>
                            <td>完了</td>
                        </tr>
                        <tr>
                            <td>○○プロジェクト</td>
                            <td>櫻井翔</td>
                            <td align="right">3,000,000</td>
                            <td align="right">0</td>
                            <td align="right">0.0%</td>
                            <td>完了</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <nav class="pagination">
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
