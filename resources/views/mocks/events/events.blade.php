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
                        イベント一覧
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
            <button type="button" class="btn btn-danger" onclick="location.href='{{ url('test/event-create') }}'">
                <i class="fa fa-plus" aria-hidden="true"></i>
                追加
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            　
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default event-detail">
                <div class="panel-body">
                    <p>
                       <a href="{{ url('test/event-detail') }}" class="event-name">小林さん結婚お祝いパーティ</a>
                        <span class="label label-danger">OPEN</span>
                        <br>
                        主催者：山田太郎
                        <br>
                        開催場所：T.Y.HARVOR
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default event-detail">
                <div class="panel-body">
                    <p>
                        <a href="{{ url('test/event-detail') }}" class="event-name">イベント名</a>
                        <span class="label label-danger">OPEN</span>
                        <br>
                        主催者：山田太郎
                        <br>
                        開催場所：T.Y.HARVOR
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default event-detail">
                <div class="panel-body">
                    <p>
                        <a href="{{ url('test/event-detail') }}" class="event-name">イベント名</a>
                        <span class="label label-primary">CLOSE</span>
                        <br>
                        主催者：藍上丘季
                        <br>
                        開催場所：大会議室
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection