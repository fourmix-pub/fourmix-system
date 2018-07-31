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
                <div class="form-group">

                    <script>
                        $(function(){
                            $('#event-datetime').datetimepicker();
                        });
                    </script>
                    <label for="event-datetime">開催日時</label>
                    <input type="text" class="form-control" id="event-datetime">
                </div>
                <button type="button" class="btn btn-default closed" onclick="location.href='{{ url('test/events') }}'">戻る</button>
                <button type="button" class="btn btn-primary" onclick="location.href='{{ url('test/events') }}'">作成</button>
            </form>
        </div>
    </div>


@endsection