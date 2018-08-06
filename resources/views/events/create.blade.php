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

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form>
                <div class="form-group">
                    <label for="event-name">イベント名</label>
                    <input type="text" class="form-control" id="event-name">
                </div>
                <div class="form-group">
                    <label for="event-comment">コメント（任意）</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="event-location">開催場所</label>
                    <input type="text" class="form-control" id="event-location">
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <label for="event-datetime">開催日時</label>
                <div class="add-input">
                    <input type="text" class="form-control event-datetime" name="date[]">
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
                    $('.event-datetime').datetimepicker();
                    $("#add-input-button").click(function () {
                        $(".add-input").append('<input type="text" class="form-control event-datetime" name="date[]">');
                        $('.event-datetime').datetimepicker();
                    });
                });
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <button type="button" class="btn btn-success" onclick="location.href='{{ route('events') }}'">戻る</button>
            <button type="submit" class="btn btn-primary">作成</button>
        </div>
    </div>

@endsection