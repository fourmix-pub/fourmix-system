@extends('layouts.auth-master')

@section('title')
    ログイン
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-xs-3 col-sm-4 col-md-3 col-lg-3">

                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-6 col-lg-6" align="center">
                            <a href="#">
                                <img src="{{ asset('/img/logo.png') }}" width="100%">
                            </a>
                        </div>
                        <div class="col-xs-3 col-sm-4 col-md-3 col-lg-3">
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="email" class="control-label">E-MAIL</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <label for="password" class="control-label">PASSWORD</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>ブラウザに保存
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-default btn-lg btn-block">
                                            LOGIN
                                        </button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                                        <a class="btn btn-link login-link" href="{{ url('/password/reset') }}">
                                            パスワードを忘れた方
                                        </a>
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
@endsection
