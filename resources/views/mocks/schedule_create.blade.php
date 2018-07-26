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
                        個人予定作成
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"style="padding-bottom: 7px;">
        <div class="form-group">
            <label class="control-label">日付</label>
            <div>
                <div class="input-group date">
                    <input type="text" class="form-control day" name="date" value="2018-07-26">
                </div>
            </div>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="control-label">週予定</label>
            <div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form action="" method="" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="" value="">

                                <div class="form-group">
                                    <div>
                                        <textarea class="form-control" rows="8" name="content" data-provide="markdown" placeholder=" Markdown"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="form-group">
                <label class="control-label">共有事項</label>
                <div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form action="" method="" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="" value="">

                                    <div class="form-group">
                                        <div>
                                            <textarea class="form-control" rows="8" name="content" data-provide="markdown" placeholder=" Markdown"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn registration-daily" onclick="location.href='./my_schedule'">登録</button>
        </div>
    </div>
@endsection