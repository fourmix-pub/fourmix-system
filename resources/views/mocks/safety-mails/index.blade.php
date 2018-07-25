
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
                        安否確認
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="active">
                            <th>日時</th>
                            <th>タイトル</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>2016.02.01</td>
                        <td>台風12号　関東上陸</td>
                        <td></td>
                    </tr>
                    </tbody>
                    <tbody>
                    <tr>
                        <td>2013.02.01</td>
                        <td>大雪による交通機関への影響</td>
                        <td></td>
                    </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>2011.3.11</td>
                            <td>東北地方太平洋沖地震</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection