{{--@extends('layouts.app')--}}

{{--@section('title')--}}
    {{--ログイン--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="form-wrapper">--}}
                {{--<h2 align="center">LOGIN</h2>--}}
                {{--<form>--}}
                    {{--<div class="form-item">--}}
                        {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="form-item{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="col-md-4 control-label">Email</label>--}}

                                {{--<div class="col-md-12">--}}
                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                                {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-item{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">password</label>--}}

                                {{--<div class="col-md-12">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                                {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-item">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label>--}}
                                            {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}>Save in browser--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="button-panel">--}}
                                {{--<input type="submit" class="button" title="Sign In" value="LOGIN">--}}
                            {{--</div>--}}
                        {{--</form>--}}
                         {{--<div class="form-footer">--}}
                            {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">--}}
                                {{--Forgot password?--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}