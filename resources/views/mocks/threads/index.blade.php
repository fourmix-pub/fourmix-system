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
            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;" data-toggle="collapse" href="#search">
                <i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
            </button>
            <button type="button" class="btn registration-daily pull-right" onclick="location.href='./threads-create'" style="margin-right: 10px;">
                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <span>新規作成</span>
            </button>
    </div>

    {{-- スレッド表示 --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="bs-callout bs-callout-default schedule-contents　thread-onclick" data-thread_id="1">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <h3>スレッドタイトル1</h3>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <h4>作成者：大澤乃梨子</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <hr>
                                    最終更新：
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