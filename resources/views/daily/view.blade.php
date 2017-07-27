@extends('layouts.app')

@section('title')
    日報閲覧
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h2>
                DAILY VIEW
            </h2>
        </div>
    </div>
</div>

<div class="row">
<button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;"  data-toggle="collapse" href="#search">
    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
</button>
    <br>
</div>

{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        {{-- モーダル：編集ボタン --}}
        @component('components.elements.modal.update', ['title'=>'日報編集'])
            @component('components.elements.form.modal.day')
                日付
            @endcomponent

            @php
                $projects = ['社内ログ管理システム','株式会社リゾーム','株式会社アシックス'];
            @endphp
            @component('components.elements.form.select.select', ['items'=>$projects,'search'=>'true'])
                プロジェクト名
            @endcomponent

            @php
                $works = ['調査','分析','営業'];
            @endphp
            @component('components.elements.form.select.select', ['items'=>$works,'search'=>'true'])
                作業分類
            @endcomponent

            @component('components.elements.form.modal.time',['title'=>'開始','time'=>'09:30'])
            @endcomponent

            @component('components.elements.form.modal.time',['title'=>'終了','time'=>'18:30'])
            @endcomponent

            @php
                $jobs = ['通常','残業','休日'];
            @endphp
            @component('components.elements.form.select.select', ['items'=>$jobs,'search'=>'true'])
                勤務分類
            @endcomponent

            @component('components.elements.form.modal.text', ['name'=>'break'])
                休憩
            @endcomponent

            <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="staff">
                    備考欄
                </label>
                <div class="col-xs-12 col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <textarea name="note" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄">
            </textarea>
                </div>
            </div>
        @endcomponent

        {{-- モーダル：削除ボタン --}}
        @component('components.elements.modal.delete',['title'=>'日報削除'])
            田中咲良の日報
        @endcomponent

        {{-- アコーディオン：検索ボタン --}}
            <br>
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
            @endcomponent

        {{-- 一覧 --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr class="active">
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
                        <td align="right">8.25</td>
                        <td align="right">20,000</td>
                        @component('components.elements.table.admin.button')
                        @endcomponent
                    </tr>
                    <tr>
                        <td colspan="7">備考：</td>
                    </tr>
                    <tr>
                        <td>田中咲良</td>
                        <td>2016/07/31</td>
                        <td>コメダコーヒー</td>
                        <td>設計</td>
                        <td align="right">8.25</td>
                        <td align="right">20,000</td>
                        @component('components.elements.table.admin.button')
                        @endcomponent
                    </tr>
                    <tr>
                        <td colspan="7">備考：</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            @component('components.elements.table.admin.pagination')
            @endcomponent

        </div>
    </div>
</div>
@endsection