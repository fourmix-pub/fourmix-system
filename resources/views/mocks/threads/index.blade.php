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
                        掲示板
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    {{-- 検索ボタン --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button type="button" class="btn btn-primary pull-right" style="margin-right: 5%;" data-toggle="collapse" href="#search">
                <i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs">検索</span>
            </button>
        </div>
    </div>

    {{-- スレッド表示 --}}
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
            追加
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
            検索
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-62">
                    タイトル
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                    作成者
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                    更新日時
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                    作成日時
                </div>
            </div>
        </div>
    </div>

@endsection