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
                        イベント作成
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <form action="{{ route('events.store') }}" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="event-title">イベント名</label>
                    <input type="text" class="form-control" name="title" id="event-title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                    <label for="event-comment">コメント（任意）</label>
                    <textarea class="form-control" name="contents" rows="3">{{ old('comment') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="event-location">開催場所</label>
                    <input type="text" class="form-control" name="location" id="event-location" value="{{ old('location') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="event-datetime">開催日時</label>
                    <div class="add-input">
                        <input type="text" class="form-control event-datetime" name="dates[]" value="{{ old('dates[]') }}">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label class="hidden-xs hidden-sm">　</label>
                    <button type="button" id="add-input-button" class="btn btn-success form-control">
                        開催日時候補追加
                    </button>
                </div>
                <script>
                    $(function(){
                        $('.event-datetime').datetimepicker({
                            format : 'YYYY-MM-DD H:m',
                            locale : 'ja',
                        });
                        var count = 0;
                        $("#add-input-button").click(function () {
                            count++;
                            console.log(count);
                            $(".add-input").append('<input type="text" class="form-control event-datetime" name=dates['+count+']>');
                            $('.event-datetime').datetimepicker({
                                format : 'YYYY-MM-DD H:m',
                                locale : 'ja',
                            });

                        });
                    });
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a href="{{ route('events.events') }}" class="btn btn-success" style="border: none">
                    戻る
                </a>
                <button type="submit" class="btn btn-primary">作成</button>
            </div>
        </div>
    </form>

@endsection