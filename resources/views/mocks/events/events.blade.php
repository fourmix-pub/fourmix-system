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

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
            <button type="button" class="btn btn-danger">＋追加</button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="event-name">
                <p><a href="#">イベント名</a> </p>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="event-detail">
                <p>主催者：山田太郎　　開催場所：T.Y.HARVOR
                    <br>
                    開催予定日：8月7日（火）　開催時刻：19:00~
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="event-name">
                <p><a href="#">イベント名</a> </p>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="event-detail">
                <p>主催者：山田太郎　　開催場所：T.Y.HARVOR
                    <br>
                    開催予定日：8月7日（火）　開催時刻：19:00~
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="event-name">
                <p><a href="#">イベント名</a> </p>
            </div>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="event-detail">
                <p>主催者：山田太郎　　開催場所：T.Y.HARVOR
                    <br>
                    開催予定日：8月7日（火）　開催時刻：19:00~
                </p>
            </div>
        </div>
    </div>

@endsection