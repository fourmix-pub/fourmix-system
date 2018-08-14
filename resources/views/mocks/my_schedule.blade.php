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
                        個人別予定管理
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="fc-toolbar fc-header-toolbar">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="fc-left"></div>
                        <div class="fc-right">
                            <a href="schedule_create">
                                <button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal" data-target="#create-">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    <span class="hidden-xs">追加</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="bs-callout bs-callout-default bs-callout-primary">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1"></div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="schedule_detail">
                                            <h3>2018/07/30</h3>
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass-half icon-color schedule-contents"></a>
                                        <span class="schedule-contents">予定</span>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                開発<br>
                                                ・要件定義<br>
                                                ・設計<br>
                                                開発<br>
                                                ・テスト<br>
                                                ・修正<br>
                                                ・保守<br>
                                                ・開発<br>
                                                開発<br>
                                                ・開発<br>
                                                ・開発<br>
                                                ・開発<br>
                                                ・開発<br>
                                                ・開発<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass icon-color schedule-contents"></a>
                                        <span class="schedule-contents">結果</span>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            開発
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <span class="glyphicon glyphicon-share icon-color schedule-contents"></span>
                                        <span class="schedule-contents">共有事項</span>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                7/30 有給休暇
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="schedule_editing">
                                            <button type="button" class="btn btn-warning" style="margin-right: 10px;" data-toggle="modal" data-target="#create">
                                                <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
                                                <span class="hidden-xs">編集</span>
                                            </button>
                                        </a>

                                        {{-- Modal（削除） --}}
                                        <a href="#">
                                            <button type="button" class="btn btn-danger" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">
                                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                                <span class="hidden-xs">削除</span>
                                            </button>
                                        </a>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                                        <h4 class="modal-title" align="left">予定削除</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="#" method="" style="display: inline;">
                                                        <div class="modal-body" align="left">
                                                            2018/07/30 の予定を削除しますか？
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="hidden" name="" value="">
                                                            <input type="hidden" name="" value="">
                                                            <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
                                                            <button type="submit" class="btn btn-danger">削除</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bs-callout bs-callout-default bs-callout-primary">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_detail">
                                    <h3>2018/07/23</h3>
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
                                <a class="fa fa-hourglass-half icon-color schedule-contents"></a>
                                <span class="schedule-contents">予定</span>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        開発
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass icon-color schedule-contents"></a>
                                <span class="schedule-contents">結果</span>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    開発
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share icon-color schedule-contents"></span>
                                <span class="schedule-contents">共有事項</span>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        7/23 午後休
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_editing">
                                    <button type="button" class="btn btn-warning" style="margin-right: 10px;" data-toggle="modal" data-target="#create">
                                        <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
                                        <span class="hidden-xs">編集</span>
                                    </button>
                                </a>

                                {{-- Modal（削除） --}}
                                <a href="#">
                                    <button type="button" class="btn btn-danger" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">
                                        <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        <span class="hidden-xs">削除</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="bs-callout bs-callout-default bs-callout-primary">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_detail">
                                    <h3>2018/07/17</h3>
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
                                <a class="fa fa-hourglass-half icon-color"></a>
                                <span>予定</span>
                                <br>
                                開発
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass icon-color"></a>
                                <span>結果</span>
                                <br>
                                開発
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share icon-color"></span>
                                <span>共有事項</span>
                                <br>
                                7/17 有給休暇
                            </div>
                            <br>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_editing">
                                    <button type="button" class="btn btn-warning" style="margin-right: 10px;" data-toggle="modal" data-target="#create">
                                        <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
                                        <span class="hidden-xs">編集</span>
                                    </button>
                                </a>

                                {{-- Modal（削除） --}}
                                <a href="#">
                                    <button type="button" class="btn btn-danger" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">
                                        <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                        <span class="hidden-xs">削除</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="bs-callout bs-callout-default bs-callout-primary">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                        <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <a href="schedule_detail">
                                        <h3>2018/07/9</h3>
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
                                    <a class="fa fa-hourglass-half icon-color"></a>
                                    <span>予定</span>
                                    <br>
                                    開発
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass icon-color"></a>
                                        <span>結果</span>
                                        <br>
                                        開発
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <span class="glyphicon glyphicon-share icon-color"></span>
                                        <span>共有事項</span>
                                        <br>
                                        7/9 有給休暇
                                    </div>
                                    <br>
                                    <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="schedule_editing">
                                            <button type="button" class="btn btn-warning" style="margin-right: 10px;" data-toggle="modal" data-target="#create">
                                                <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
                                                <span class="hidden-xs">編集</span>
                                            </button>
                                        </a>

                                        {{-- Modal（削除） --}}
                                        <a href="#">
                                            <button type="button" class="btn btn-danger" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">
                                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                                <span class="hidden-xs">削除</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="bs-callout bs-callout-default bs-callout-primary">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="schedule_detail">
                                            <h3>2018/07/2</h3>
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
                                        <a class="fa fa-hourglass-half icon-color"></a>
                                        <span>予定</span>
                                        <br>
                                        開発
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass icon-color"></a>
                                        <span>結果</span>
                                        <br>
                                        開発
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <span class="glyphicon glyphicon-share icon-color"></span>
                                        <span>共有事項</span>
                                        <br>
                                        7/2 有給休暇
                                    </div>
                                    <br>
                                    <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="schedule_editing">
                                            <button type="button" class="btn btn-warning" style="margin-right: 10px;" data-toggle="modal" data-target="#create">
                                                <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
                                                <span class="hidden-xs">編集</span>
                                            </button>
                                        </a>

                                        {{-- Modal（削除） --}}
                                        <a href="#">
                                            <button type="button" class="btn btn-danger" style="margin-right: 10px;" data-toggle="modal" data-target="#exampleModal">
                                                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                                <span class="hidden-xs">削除</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div align="middle">

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
            </div>

@endsection