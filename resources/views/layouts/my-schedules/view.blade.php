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
                            <a href="{{ route('week-schedules.add') }}">
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
                    @foreach($weekSchedules as $weekSchedule)
                    <div class="bs-callout bs-callout-default bs-callout-primary">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1"></div>
                            <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <a href="{{ route('#') }}">
                                            <h3>{{ $weekSchedule->date }}</h3>
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
                                                {{ $weekSchedule->schedule }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <a class="fa fa-hourglass icon-color schedule-contents"></a>
                                        <span class="schedule-contents">結果</span>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                {{ $weekSchedule->result }}
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
                                                {{ $weekSchedule->share }}
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
                                                            {{ $weekSchedule->date }} の予定を削除しますか？
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
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div align="middle">
                        {{ $weekSchedules->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection