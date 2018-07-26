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
                        予定閲覧
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="fc-toolbar fc-header-toolbar">
                <div class="fc-left">
                    <h2>7月 2018</h2>
                </div>
                <div class="fc-right"></div>
                <div class="fc-center"></div>
                <div class="fc-clear"></div>
            </div>
            <div class="row">
                <div align="right">
                    <a href="#">
                        <span class="glyphicon glyphicon-trash">削除　　</span>
                    </a>
                    <a href="schedule_create">
                        <span class="glyphicon glyphicon-plus">追加　　</span>
                    </a>
                </div>
            </div>

                <div class="bs-callout bs-callout-default">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <a href="schedule_detail">
                                        <h4>2018/07/30</h4>
                                    </a>
                                </div>
                                <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <a href="schedule_editing">
                                        <span class="glyphicon glyphicon-edit">編集　　</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a class="fa fa-hourglass-half"></a>
                                    <span class="hidden-xs hidden-sm">今週の予定</span>
                                    開発
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <a class="fa fa-hourglass"></a>
                                    <span class="hidden-xs hidden-sm">先週の結果：</span>
                                    開発
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <span class="glyphicon glyphicon-share"></span>
                                    <span class="hidden-xs hidden-sm">共有事項：</span>
                                    7/30 有給休暇
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            <div class="bs-callout bs-callout-default">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_detail">
                                    <h4>2018/07/23</h4>
                                </a>
                            </div>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_editing">
                                    <span class="glyphicon glyphicon-edit">編集　　</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass-half"></a>
                                <span class="hidden-xs hidden-sm">今週の予定</span>
                                開発
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass"></a>
                                <span class="hidden-xs hidden-sm">先週の結果：</span>
                                開発
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share"></span>
                                <span class="hidden-xs hidden-sm">共有事項：</span>
                                7/23 午後休
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="bs-callout bs-callout-default">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_detail">
                                    <h4>2018/07/17</h4>
                                </a>
                            </div>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_editing">
                                    <span class="glyphicon glyphicon-edit">編集　　</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass-half"></a>
                                <span class="hidden-xs hidden-sm">今週の予定</span>
                                開発
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass"></a>
                                <span class="hidden-xs hidden-sm">先週の結果：</span>
                                開発
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share"></span>
                                <span class="hidden-xs hidden-sm">共有事項：</span>
                                7/17 有給休暇
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="bs-callout bs-callout-default">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_detail">
                                    <h4>2018/07/9</h4>
                                </a>
                            </div>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_editing">
                                    <span class="glyphicon glyphicon-edit">編集　　</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass-half"></a>
                                <span class="hidden-xs hidden-sm">今週の予定</span>
                                開発
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass"></a>
                                <span class="hidden-xs hidden-sm">先週の結果：</span>
                                開発
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share"></span>
                                <span class="hidden-xs hidden-sm">共有事項：</span>
                                7/9 有給休暇
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="bs-callout bs-callout-default">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_detail">
                                    <h4>2018/07/2</h4>
                                </a>
                            </div>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_editing">
                                    <span class="glyphicon glyphicon-edit">編集　　</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass-half"></a>
                                <span class="hidden-xs hidden-sm">今週の予定</span>
                                開発
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass"></a>
                                <span class="hidden-xs hidden-sm">先週の結果：</span>
                                開発
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share"></span>
                                <span class="hidden-xs hidden-sm">共有事項：</span>
                                7/2 有給休暇
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div align="right">

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
    </div>

@endsection