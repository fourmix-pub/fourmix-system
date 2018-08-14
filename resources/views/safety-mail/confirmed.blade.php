@extends('layouts.auth-master')

@section('title')
    安否確認
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                                <h2>ご協力ありがとうございました。</h2>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-3">
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6" align="center">
                                <a href="#">
                                    <img src="{{ asset('/img/logo.png') }}" width="35%">
                                </a>
                            </div>
                            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
