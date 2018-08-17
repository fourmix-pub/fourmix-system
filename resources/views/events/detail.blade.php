@extends('layouts.app')

@section('title')
    イベント詳細
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
                        {{ $event->title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button type="button" class="btn btn-warning pull-right" aria-label="right Align"
                    data-toggle="modal" data-target="#ev-edit-Modal">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                <span class="hidden-xs">編集</span>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="ev-edit-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">参加受け付けの設定</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('events.update', compact('event'))}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('put') }}
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-danger" style=" border: none; margin-bottom: 10px">
                                        <input type="radio" name="is_opened" value="1" autocomplete="off">OPEN
                                    </label>　
                                    <label class="btn btn-primary" style=" border: none">
                                        <input type="radio" name="is_opened" value="0" autocomplete="off">CLOSE
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる
                                    </button>
                                    <button type="submit" class="btn btn-primary">編集</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 削除ボタン -->
            <button type="button" class="btn btn-danger pull-right" aria-label="right Align" style="margin-right: 10px;"
                    data-toggle="modal" data-target="#ev-del-Modal">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                <span class="hidden-xs">削除</span>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="ev-del-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">イベント削除</h4>
                        </div>
                        <div class="modal-body">
                            イベント {{ $event->id }}： {{ $event->title }} を削除しますか？
                        </div>
                        <form action="{{ route('events.destroy', compact('event')) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
                                <button type="submit" class="btn btn-danger">
                                削除
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <p class="ev-info">
                {{ $event->contents }}
            </p>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
    </div>
    <div class="row">
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default answers">
                <!-- Default panel contents -->
                <table class="table ans-table">
                    <tr>
                        <th>
                            参加者名
                        </th>
                        @foreach($event->eventDates as $eventDate)
                            <th>
                                {{ $eventDate->date }}
                            </th>
                        @endforeach
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                {{ $user->name }}
                            </td>
                            @foreach($event->eventDates as $eventDate)
                                <td>
                                    {{ $eventDate->entryUserMark($user->id) }}
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- Button trigger modal -->
            <div align="center">
                <button type="button" class="btn btn-success btn-lg ev-ans-btn"
                        style="border: none; " data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    出欠
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">出欠確認</h4>
                        </div>
                        <form action="{{ route('events.entry', compact('event')) }}" method="post">
                            <div class="modal-body">
                                @if($event->is_opened)
                                    <div class="panel panel-default" style="border: none; box-shadow: none">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="row">
                                                        @foreach($event->eventDates as $eventDate)
                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                {{ csrf_field() }}
                                                                {{ $eventDate->date }}
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                <div class="btn-group" data-toggle="buttons">
                                                                    <label class="btn btn-success"
                                                                           style="border: none; margin-bottom: 8px">
                                                                        <input type="radio"
                                                                               name="day[{{ $eventDate->id }}]"
                                                                               value=1 autocomplete="off">
                                                                        <span class="glyphicon ev-ans glyphicon-ok-sign"
                                                                              aria-hidden="true"></span>
                                                                    </label>
                                                                    <label class="btn btn-warning">
                                                                        <input type="radio"
                                                                               name="day[{{ $eventDate->id }}]"
                                                                               value=2 autocomplete="off">
                                                                        <span class=
                                                                              "glyphicon ev-ans glyphicon-question-sign"
                                                                              aria-hidden="true"></span>
                                                                    </label>
                                                                    <label class="btn btn-danger">
                                                                        <input type="radio"
                                                                               name="day[{{ $eventDate->id }}]"
                                                                               value=3 autocomplete="off">
                                                                        <span class=
                                                                              "glyphicon ev-ans glyphicon-remove-sign"
                                                                              aria-hidden="true"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    このイベントは受付終了しています
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default closed" data-dismiss="modal">
                                    閉じる
                                </button>
                                @if($event->is_opened)
                                    <button type="submit" class="btn btn-primary">
                                        送信
                                    </button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="{{ route('events.events') }}" class="btn btn-primary">戻る</a>
        </div>
    </div>
@endsection