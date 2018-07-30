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
                        予定管理
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
                            <button type="button" class="btn btn-primary">予定入力</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="bs-callout bs-callout-default">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1"></div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="schedule_detail">
                                            <h3>2018/07/30</h3>
                                        </a>
                                    </div>
                                    <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    {{-- Modal（削除） --}}
                                       <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                           <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                       </button>

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

                                       <button type="button" class="btn btn-xs btn-warning" onclick="location.href='./schedule_editing'" data-toggle="modal" data-target="#editDaily-5044" style="margin: 4px">
                                           <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                       </button>
                                   </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass-half icon-color schedule-contents"></a>
                                        <span class="hidden-xs hidden-sm schedule-contents">今週の予定</span>
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
                                        <span class="hidden-xs hidden-sm schedule-contents">先週の結果</span>
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
                                        <span class="hidden-xs hidden-sm schedule-contents">共有事項</span>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                7/30 有給休暇
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

            <div class="bs-callout bs-callout-default">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href="schedule_detail">
                                    <h3>2018/07/23</h3>
                                </a>
                            </div>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteDaily-5044" style="margin: 4px">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editDaily-5044" style="margin: 4px">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
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
                                <span class="hidden-xs hidden-sm schedule-contents">今週の予定</span>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        開発
                                        </div>
                                    </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass icon-color schedule-contents"></a>
                                <span class="hidden-xs hidden-sm schedule-contents">先週の結果</span>
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
                                <span class="hidden-xs hidden-sm schedule-contents">共有事項</span>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        7/23 午後休
                                    </div>
                                </div>
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
                                    <h3>2018/07/17</h3>
                                </a>
                            </div>
                            <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteDaily-5044" style="margin: 4px">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editDaily-5044" style="margin: 4px">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button>
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
                                <span class="hidden-xs hidden-sm">今週の予定</span>
                                <br>
                                開発
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass icon-color"></a>
                                <span class="hidden-xs hidden-sm">先週の結果</span>
                                <br>
                                開発
                            </div>
                         </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share icon-color"></span>
                                <span class="hidden-xs hidden-sm">共有事項</span>
                                <br>
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
                                        <h3>2018/07/9</h3>
                                    </a>
                                </div>
                                <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteDaily-5044" style="margin: 4px">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editDaily-5044" style="margin: 4px">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                    </button>
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
                                    <span class="hidden-xs hidden-sm">今週の予定</span>
                                    <br>
                                    開発
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass icon-color"></a>
                                        <span class="hidden-xs hidden-sm">先週の結果</span>
                                        <br>
                                        開発
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <span class="glyphicon glyphicon-share icon-color"></span>
                                        <span class="hidden-xs hidden-sm">共有事項</span>
                                        <br>
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
                                            <h3>2018/07/2</h3>
                                        </a>
                                    </div>
                                    <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteDaily-5044" style="margin: 4px">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                        <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editDaily-5044" style="margin: 4px">
                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                        </button>
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
                                        <span class="hidden-xs hidden-sm">今週の予定</span>
                                        <br>
                                        開発
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass icon-color"></a>
                                        <span class="hidden-xs hidden-sm">先週の結果</span>
                                        <br>
                                        開発
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <span class="glyphicon glyphicon-share icon-color"></span>
                                        <span class="hidden-xs hidden-sm">共有事項</span>
                                        <br>
                                        7/2 有給休暇
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