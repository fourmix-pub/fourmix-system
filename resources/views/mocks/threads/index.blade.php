@extends('layouts.app')

@section('title')
    test
@endsection

@php
    $nav = 'tools';
@endphp

@section('content')

    {{-- タイトル --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <div>
                    <h2>
                        掲示板
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    {{-- 検索ボタン --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button type="button" class="btn btn-primary pull-right" data-toggle="collapse" href="#search" style="margin-right: 10px;">
                <i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
            </button>
            <button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal"
                    data-target="#create-" onclick="location.href='./threads-create'">
                <i class="fa fa-plus" aria-hidden="true"></i>
                <span class="hidden-xs">追加</span>
            </button>
        </div>
    </div>
    <br>
    {{-- 検索フォーム --}}
    <div class="collapse" id="search">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="#" class="form-horizontal" method="get">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="project_id">
                                    スレッドタイトル
                                </label>
                                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="20文字以内">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="">作成者名</label>
                                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <select class="selectpicker" data-width="100%" data-live-search="true">
                                        <option value=>指定なし</option>
                                        <option value="1">名前1</option>
                                        <option value="2">名前2</option>
                                        <option value="3">名前3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">作成日</label>
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <div class="input-group day">
                                        <input type="text" class="form-control" value=""
                                               name="start_date">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <label class="hidden-xs col-sm-1 col-md-1 col-lg-1 control-label"
                                       style="text-align: center">～</label>
                                <label class="visible-xs col-xs-12 control-label" style="text-align: center">　</label>
                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                    <div class="input-group day">
                                        <input type="text" class="form-control" value="" name="end_date">
                                        <span class="input-group-addon">
                                             <span class="glyphicon glyphicon-calendar">
                                             </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form text-center">
                        <div class="btn-group">
                            <button type="submit" class="btn">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- スレッド表示 --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="thread-callout thread-index thread-onclick" data-thread_id="1">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h3>スレッドタイトル1</h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <h3><small>作成者：大澤乃梨子</small></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr class="thread-hr">
                                <div class="thread-date">
                                    <h4>最終更新：2018/07/25 12:00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function(){
                        $(".thread-onclick").click(function () {
                            let id = $(this).data('thread_id');
                            location.href = './threads-detail';
                        });
                    });
                </script>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="thread-callout thread-index thread-onclick" data-thread_id="1">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h3>スレッドタイトル2</h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <h3><small>作成者：大澤乃梨子</small></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr>
                                <div class="thread-date">
                                    <h4>最終更新：2018/07/25 12:00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="thread-callout thread-index thread-onclick" data-thread_id="1">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h3>スレッドタイトル3</h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <h3><small>作成者：大澤乃梨子</small></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr>
                                <div class="thread-date">
                                    <h4>最終更新：2018/07/25 12:00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="thread-callout thread-index thread-onclick" data-thread_id="1">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h3>スレッドタイトル4</h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <h3><small>作成者：大澤乃梨子</small></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr>
                                <div class="thread-date">
                                    <h4>最終更新：2018/07/25 12:00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- ページ --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div align="center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

@endsection