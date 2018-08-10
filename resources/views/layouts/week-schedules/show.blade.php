@extends('layouts.app')

@section('title')
    test
@endsection

@php
    $nav = 'tools';
@endphp

@section('content')

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="fc-toolbar fc-header-toolbar">
                <div class="fc-left">
                    <button type="button" class="btn btn-primary" onclick="location.href= '{{ route('my-schedules.index') }}'">
                        <i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><span>戻る</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h2><small>名前：{{ $user->name }}</small></h2>
                </div>
                <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <!-- Single button -->
                    <div class="btn-group">
                        <form action="{{ route('week-schedules.index') }}">
                            <select name="user_id" class="selectpicker" data-live-search="true">
                                @foreach($users as $userData)
                                    <option value="{{ $userData->id }}">{{ $userData->name }}</option>
                                @endforeach
                            </select>
                            <input class="btn btn-danger" type="submit" value="検索">
                        </form>
                    </div>
                    <br>
                </div>
            </div>

            <div class="bs-callout bs-callout-default bs-callout-primary">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h3>{{ $weekSchedule->date }}　<small>の週</small></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

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
                                <span class="hidden-xs hidden-sm">予定</span>
                                {{ markdown($weekSchedule->schedule) }}
                            </div>

                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass icon-color"></a>
                                <span class="hidden-xs hidden-sm">結果</span>
                                {{ markdown($weekSchedule->result) }}
                            </div>

                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="glyphicon glyphicon-share icon-color"></a>
                                <span class="hidden-xs hidden-sm">共有事項</span>
                                {{ markdown($weekSchedule->share) }}
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">東京花子</h3>
                        </div>
                        <div class="panel-body">
                            コメント内容<br>
                            コメント内容
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal --}}
            <div align="center">
                <button type="button" class="btn registration-daily" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">コメント作成</button>
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
        </div>
@endsection