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
    @foreach($events as $event)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default event-detail">
                <div class="panel-body">
                    <p>
                        <a href="{{ route('events.detail', compact('event')) }}">
                            {{ $event->title }}
                            <span class="label label-danger">OPEN</span>
                        <br>
                        主催者：：{{ $event->user->name }}
                        <br>
                        開催場所：：{{ $event->location }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection