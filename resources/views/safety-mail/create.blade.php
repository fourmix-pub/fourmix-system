@extends('layouts.app')

@section('title')
    安否確認
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
                        <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 7px;">
                                    <h4>タイトル</h4>
                                    <input type="text" name="title" class="form-control" placeholder="20文字以内">
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
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="email" name="testMail" class="form-control"
                                           placeholder="メールアドレスを入力(テスト送信用)">
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" align="center">
                                <button type="button" class="btn registration-daily">
                                    <span>
                                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                        テスト送信
                                    </span>
                                </button>
                            </div>
                            <br class="hidden-md hidden-lg">
                            <br class="hidden-md hidden-lg">
                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" align="center">
                                <button type="button" class="btn registration-daily"
                                        data-toggle="modal" data-target="#confirmation">
                                    <span>
                                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                                        送信
                                    </span>
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="modal-title" id="myModalLabel">安否確認メール</h3>
                                    </div>
                                    <div class="modal-body">
                                        <h4>送信します。よろしいですか？</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            閉じる
                                        </button>
                                        <button type="button" class="btn btn-danger">送信する</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection