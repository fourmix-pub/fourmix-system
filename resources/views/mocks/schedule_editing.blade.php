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
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"style="padding-bottom: 7px;">
            <div class="form-group">
                <label class="control-label schedule-contents">日付</label>
                <div>
                    <select class="selectpicker">
                        <option>7/2</option>
                        <option>7/9</option>
                        <option>7/17</option>
                        <option>7/23</option>
                        <option>7/30</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="control-label schedule-contents">予定</label>
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
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="control-label schedule-contents">結果</label>
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
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <label class="control-label schedule-contents">共有事項</label>
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
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div align="center">
                <button type="button" class="btn registration-daily" onclick="location.href='./my_schedule'">登録</button>
            </div>
        </div>
    </div>
@endsection