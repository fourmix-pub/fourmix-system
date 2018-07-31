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
    <div class="row">
        <div class="fc-toolbar fc-header-toolbar">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="fc-left"></div>
                <div class="fc-right">
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#exampleModal">
                        <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                        <span class="hidden-xs">削除</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="bs-callout bs-callout-orange schedule-contents">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <h3>スレッドタイトル1</h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <h3><small>作成者：大澤乃梨子</small></h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr class="thread-hr">
                                <h5>スレッドの説明スレッドの説明<br>
                                    スレッドの説明スレッドの説明
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <h5>最終更新：2018/07/20</h5>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                <h5>作成日時：2018/07/01</h5>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- 投稿内容 --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    コメントコメントコメントコメントコメントコメントコメントコメントコメント<br>
                    コメントコメントコメントコメントコメントコメント
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                        名前：山田太郎
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <span>投稿日時：2018/03/03</span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-1">
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                  data-target="#exampleModal">
                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                <span class="hidden-xs">削除</span>
                            </button>
                            {{-- モーダル --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                            <h4 class="modal-title" align="left">コメント削除</h4>
                                        </div>
                                        <form class="form-horizontal" action="#" method="" style="display: inline;">
                                            <div class="modal-body" align="left">
                                                削除してもよろしいですか？
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="" value="">
                                                <input type="hidden" name="" value="">
                                                <button type="button" class="btn btn-default closed" data-dismiss="modal">
                                                    閉じる
                                                </button>
                                                <button type="submit" class="btn btn-danger">削除</button>
                                            </div>
                                        </form>
                                    </div>
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
            <div class="panel panel-default">
                <div class="panel-body">
                    コメントコメントコメントコメントコメントコメントコメントコメントコメント<br>
                    コメントコメントコメントコメントコメントコメント
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                            名前：山田太郎
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <span>投稿日時：2018/03/03</span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-1">
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#exampleModal">
                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                <span class="hidden-xs">削除</span>
                            </button>
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
                    コメントコメントコメントコメントコメントコメントコメントコメントコメント<br>
                    コメントコメントコメントコメントコメントコメント
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                            名前：山田太郎
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <span>投稿日時：2018/03/03</span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-1">
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#exampleModal">
                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                <span class="hidden-xs">削除</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- コメントフォーム --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="" method="" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="" value="">

                            <div class="form-group">
                                <div>
                                    <textarea class="form-control" rows="8" name="content" data-provide="markdown" placeholder=" Markdown"></textarea>
                                </div>
                            </div>
                        </form>
                        <div align="center">
                            <button type="button" class="btn btn-danger" onclick="location.href='#'">コメント送信</button>
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