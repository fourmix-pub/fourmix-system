@extends('layouts.app')

@section('title')
    安否確認
@endsection

@php
    $nav = 'tools';
@endphp

@section('js')
    <script>
        $(function(){
            $("#formSubmit").click(function () {
                $("#safetyMail-form").method = "post";
                $("#safetyMail-form").submit();
            });

            $("#send-test-mail").click(function () {
                let title = $("#safetyMail-form [name=title]").val();
                let contents = $("#safetyMail-form [name=contents]").val();
                let testMail = $("#test-mail").val();

                axios.post('{{ route('ajax.safety-mails.test-mail') }}', {
                    title: title,
                    contents: contents,
                    email: testMail,
                }).then(function (response) {
                    if (response.data.status === 'OK') {
                        alert('送信が完了しました');
                    }
                }).catch(function (error) {
                    let errors = error.response.data.errors;
                    var messages = '送信に失敗しました' + '\n';
                    $.each(errors, function (index, obj) {
                        $.each(obj, function (index, message) {
                            messages += message + '\n';
                        })
                    });
                    alert(messages);
                });
            });
        });
    </script>
@endsection

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
                        <form id="safetyMail-form" action="{{ route('safety-mails.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 7px;">
                                    <h4>タイトル</h4>
                                    <input type="text" name="title" class="form-control" placeholder="20文字以内"
                                    value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h4>本文</h4>
                                    <textarea name="contents" rows="15"  class="form-control textarea-resize" data-provide="markdown" placeholder=" Markdown" placeholder="1000文字以内">{{ old('contents') }}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input id="test-mail" type="email" name="testMail" class="form-control"
                                           placeholder="メールアドレスを入力(テスト送信用)">
                                </div>
                            </div>
                        </form>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" align="center">
                                <button id="send-test-mail" type="button" class="btn registration-daily">
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
                                        <a href="javascript:void(0)" type="button"
                                           class="btn btn-danger" id="formSubmit">
                                            送信する
                                        </a>
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
