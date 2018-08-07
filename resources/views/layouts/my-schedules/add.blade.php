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
                        予定入力
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="fc-toolbar fc-header-toolbar">
                <div class="fc-left">
                    <button type="button" class="btn btn-primary" onclick="location.href= '{{ route('my-schedules.view') }}'">
                        <i class="glyphicon glyphicon-arrow-left" aria-hidden="true"></i><span>戻る</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <form action="{{ route('week-schedules.store') }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"style="padding-bottom: 7px;">
            <label class="control-label schedule-contents">日付</label>
                <select class="selectpicker" name="date">
                    @foreach($collections as $collection)
                        <option value= {{ $collection['key'] }}>
                            {{ $collection['value'] }}
                        </option>
                    @endforeach
                </select>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="control-label schedule-contents">予定</label>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <textarea class="form-control" rows="8" name="schedule" data-provide="markdown" placeholder=" Markdown"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="control-label schedule-contents">結果</label>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <textarea class="form-control" rows="8" name="result" data-provide="markdown" placeholder=" Markdown"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="control-label schedule-contents">共有事項</label>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="panel panel-default">
                                <textarea class="form-control" rows="8" name="share" data-provide="markdown" placeholder=" Markdown"></textarea>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
            <div align="center">
                <button type="submit" class="btn registration-daily" onclick="location.href= '{{ route('my-schedules.view') }}'">登録</button>
            </div>
    </form>
@endsection