
@extends('layouts.app')

@section('title')
    test
@endsection

@php
    $nav = 'tools';
@endphp

@section('content')
<div class="bg">
    {{-- タイトル --}}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="page-header">
                    <div>
                        <h2>
                            ランチマッチング
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- コンテンツ --}}
        <div class="container lunch-cont">
            <div class="row" align="center">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 tableware">
                    <img src="{{ asset('/img/fork.png') }}" class="rounded float-right">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 hands" >
                    <img src="{{ asset('/img/hands.png') }}" class="rounded float-right">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 glass">
                    <img src="{{ asset('/img/glass.png') }}" class="rounded float-right">
                </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"align="center">
                    <p>
                        <button type="button" class="btn btn-warning btn-lg lunch-btn">申し込む</button>
                    </p>
                </div>
            </div>
                <div class="row" align="center">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 people">
                        <img src="{{ asset('/img/hitoA.png') }}" >
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 people">
                        <img src="{{ asset('/img/hitoC.png') }}" >
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 people">
                        <img src="{{ asset('/img/hitoB.png') }}">
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
