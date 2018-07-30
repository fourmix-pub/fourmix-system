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
                        イベント詳細
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}

<div class="container">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="panel panel-default event-name">
                <div class="panel-body">
                    <p>イベント名</p>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="panel panel-default event-detail">
                <div class="panel-body">
                    <p>
                        説明文説明文説明文
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="panel panel-default p-panel">
                    <div class="panel-body">
                        参加者名
                    </div>
                    <div class="panel-footer">◯</div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="panel panel-default p-panel">
                    <div class="panel-body">
                        参加者名
                    </div>
                    <div class="panel-footer">◯</div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="panel panel-default p-panel">
                    <div class="panel-body">
                        参加者名
                    </div>
                    <div class="panel-footer">×</div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="panel panel-default p-panel">
                    <div class="panel-body">
                        参加者名
                    </div>
                    <div class="panel-footer">△</div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="panel panel-default p-panel">
                    <div class="panel-body">
                        参加者名
                    </div>
                    <div class="panel-footer">△</div>
                </div>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <div class="panel panel-default p-panel">
                    <div class="panel-body">
                        参加者名
                    </div>
                    <div class="panel-footer">△</div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="btn-group btn-group-lg answer" role="group" aria-label="...">
                <button type="button" class="btn btn-success">
                    <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-warning">
                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        </div>
</div>
@endsection