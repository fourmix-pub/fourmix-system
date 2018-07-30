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
    {{-- スレッドの説明 --}}
    <div align="right">
        <button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <span class="hidden-xs">追加</span>
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="exampleModalLabel">コメント</h4>
                </div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="" method="" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="" value="">

                                <div class="form-group">
                                    <div>
                                        <textarea class="form-control" rows="16" name="content" data-provide="markdown" placeholder=" Markdown"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div align="center">
                        <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">コメント送信</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="bs-callout bs-callout-default schedule-contents">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <h3>スレッドタイトル1</h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <br>
                                <h4>作成者：大澤乃梨子</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr>
                                <h5>スレッドの説明</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h5>最終更新：　作成日時：</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- コメントフォーム --}}
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button type="button" class="btn btn-danger pull-right" data-toggle="collapse" href="#search">
                <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
            </button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="collapse" id="search">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="#" class="form-horizontal" method="get">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <div>
                                    <textarea class="form-control" rows="8" name="content" data-provide="markdown" placeholder=" Markdown"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div align="center">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">コメント送信</button>
                </div>
            </div>
        </div>
    </div>


        {{-- 投稿内容 --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    コメント<br>
                    コメントコメント
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                        名前：山田太郎
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                        <span class="right">投稿日時：2018/03/03</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    コメント<br>
                    コメントコメント
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                            名前：東京花子
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                            <span class="right">投稿日時：2018/02/02</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    コメント<br>
                    コメントコメント
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                            名前：天王洲アイル
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                            <span class="right">投稿日時：2018/01/01</span>
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