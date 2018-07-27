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
                        新規メール作成
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
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" style="padding-bottom: 7px;">
                                    <h4>タイトル</h4>
                                    <input type="text" class="form-control" placeholder="20文字以内">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h4>本文</h4>
                                    <textarea name="contents" rows="15"  class="form-control" placeholder="1000文字以内"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div align="middle">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="button" class="btn btn-danger" style="margin-right: 10px;">
                                            <span class="mail-create-button">
                                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                            送信
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection