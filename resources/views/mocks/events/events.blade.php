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
                        イベント管理
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
            <button type="button" class="btn btn-danger">＋追加</button>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table class="table table-bordered">
                <thead>
                <th>イベント名</th>
                <th>主催者</th>
                <th>開催予定日</th>
                <th>開催場所</th>
                <th>開催時刻</th>
                <th>
                </th>
                </thead>
                <tr>
                    <td>イベント名</td>
                    <td>主催者</td>
                    <td>開催予定日</td>
                    <td>開催場所</td>
                    <td>開催時刻</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>イベント名</td>
                    <td>主催者</td>
                    <td>開催予定日</td>
                    <td>開催場所</td>
                    <td>開催時刻</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>イベント名</td>
                    <td>主催者</td>
                    <td>開催予定日</td>
                    <td>開催場所</td>
                    <td>開催時刻</td>
                    <td>
                    </td>
                </tr>
            </table>
        </div>
    </div>

@endsection