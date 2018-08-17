@extends('layouts.app')

@section('title')
    ランチマッチング
@endsection

@php
    $nav = 'tools';
@endphp

@include('layouts.common.link')


@section('content')

    <body id="lunch">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <div class="arrow">
                        <button type="button" class="btn btn-success back"
                                onClick="location.href='http://fourmix-system.test/dailies'">
                            <span class="glyphicon glyphicon-arrow-left" aria-hidden="true">
                            </span>
                        </button>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-header">
                        <div>
                            <h2>
                                本日のランチマッチング
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" align="center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="lunch-content">
                        <p>
                            参加者の中から、ランチタイムの相手がランダムに選ばれます
                        </p>
                        <p>
                            参加しますか？
                        </p>
                    </div>
                </div>
            </div>
            <br>
            @if($match->participation ?? null)
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                        <div class="alert alert-info match-alt" role="alert"
                             style="border: none; width: 320px; font-size: 24px;"> すでに参加登録済です</div>
                    </div>
                </div>
            @else
                <form action="{{ route('matching.entry') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                            <button type="submit" name="participation" value="1" class="btn btn-primary btn-lg lunch-btn">
                                参加
                            </button>
                        </div>
                    </div>
                </form>
            @endif
                <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                    <h3 class="lunch-end">
                        締め切り：12:00
                    </h3>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
@endsection