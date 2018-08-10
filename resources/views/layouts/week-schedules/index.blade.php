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
                        個人別予定確認2018
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <h2><small>名前：{{ $user->name }}</small></h2>
                </div>
                <div align="right" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="btn-group">
                        <form action="{{ route('week-schedules.index') }}">
                            <select name="user_id" class="selectpicker" data-live-search="true">
                                @foreach($users as $userData)
                                <option value="{{ $userData->id }}">{{ $userData->name }}</option>
                                @endforeach
                            </select>
                            <input class="btn btn-danger" type="submit" value="検索">
                        </form>
                    </div>
                </div>
            </div>


            @foreach($weekSchedules as $weekSchedule)
            <div class="bs-callout bs-callout-default schedule-contents bs-callout-primary">
                <div class="row">
                    <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-11 col-lg-11">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="{{ route('week-schedules.show', compact('weekSchedule')) }}">
                                    <h3>{{ $weekSchedule->date }}</h3>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass-half icon-color schedule-contents"></a>
                                <span class="schedule-contents">予定</span>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        {{ markdown($weekSchedule->schedule) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <a class="fa fa-hourglass icon-color schedule-contents"></a>
                                <span class="schedule-contents">結果</span>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        {{ markdown($weekSchedule->result) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <span class="glyphicon glyphicon-share icon-color"></span>
                                <span class="schedule-contents">共有事項</span>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        {{ markdown($weekSchedule->share) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div align="middle">
                        {{ $weekSchedules->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection