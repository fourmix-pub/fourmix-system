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
                        個人予定編集
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="control-label">
                        日付
                    </label>
                    <div>
                        <div id="" class="input-group date">
                            <input type="text" name="start_at" value="" class="form-control" placeholder="2018/07/30">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar">

                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label class="control-label">今週の予定</label>
                    <div>
                        <div class="btn-group bootstrap-select form-control">
                            <input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search" placeholder="開発">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="control-label">先週の予定</label>
                        <div>
                            <div class="btn-group bootstrap-select form-control">
                                <input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">共有事項</label>
                    <div>
                        <div class="btn-group bootstrap-select form-control">
                            <input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search" placeholder="7/30　有給休暇">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn registration-daily" href="{{ url('/my_schedule') }}">登録</button>
    </div>
@endsection