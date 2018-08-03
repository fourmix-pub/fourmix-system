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
                        安否確認
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button type="button" class="btn registration-daily pull-right" onclick="location.href='./mail-create'">
                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <span>新規メール作成</span>
            </button>
        </div>
    </div>
    <br>
    {{-- 一覧表示 --}}

    @foreach($safetyMails as $safetyMail)
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body mail-panel mail-onclick" data-mail_id={{ $safetyMail->id }}>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {{ $safetyMail->created_at }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <h4>
                                        <i class="glyphicon glyphicon-envelope icon-color" aria-hidden="true"></i>
                                        {{ $safetyMail->title }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                    <span class="safety-mails-ratio">100</span>%　Confirmed (10/10)
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            <span class="sr-only">100% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(function(){
                        $(".mail-onclick").click(function () {
                            let id = $(this).data('mail_id');
                            location.href = './mail-confirmation' + id;
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    @endforeach

    {{-- ページ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div align="center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection