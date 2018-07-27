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
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 7px;">
                                    <h4>タイトル</h4>
                                    <input type="text" class="form-control" placeholder="20文字以内">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h4>本文</h4>
                                    <textarea name="contents" rows="15"  class="form-control textarea-resize" data-provide="markdown" placeholder=" Markdown" placeholder="1000文字以内"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div align="middle">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="email" class="form-control" placeholder="メールアドレスを入力">
                                        <button type="button" class="btn registration-daily" style="margin-right: 10px;">
                                            <span>
                                                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                                テスト送信
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div align="middle">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="button" class="btn registration-daily" style="margin-right: 10px;" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <span>
                                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                            確認
                                            </span>
                                        </button>

                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    以下の内容で送信してもよろしいですか？
                                                    <br>
                                                    内容内容内容..........
                                                </div>
                                            </div>
                                        </div>

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