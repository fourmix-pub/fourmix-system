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
                        スレッド新規作成
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="mail-form-callout">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form action="#">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 7px;">
                                    <h4>スレッド名</h4>
                                    <input type="text" class="form-control" placeholder="20文字以内">
                                </div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h4>説明</h4>
                                        <textarea name="contents" rows="15"  class="form-control textarea-resize" data-provide="markdown" placeholder=" Markdown" placeholder="1000文字以内"></textarea>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                                    <button type="button" class="btn registration-daily" onclick="location.href='./threads'"
                                            data-toggle="modal" data-target="#confirmation">
                                        <span>
                                            <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                            作成
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection