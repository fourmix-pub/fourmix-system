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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    Panel content
                </div>
                <div class="panel-footer">Panel footer</div>
            </div>

        </div>
    </div>

@endsection