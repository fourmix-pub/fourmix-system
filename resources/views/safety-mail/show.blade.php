
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
                <table class="table table-bordered table-center">
                    <thead>
                    <tr class="active">
                        <th>氏名</th>
                        <th>所属</th>
                        <th>安否</th>
                        <th>再送信</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->department->name }}</td>
                        <td>
                                <span class="label label-success safety-status">
                                    <i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i> 確認済
                                </span>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                </label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>大澤乃梨子</td>
                        <td>システムデザイングループ</td>
                        <td>
                                <span class="label label-default safety-status">
                                    <i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i> 未確認
                                </span>
                        </td>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                </label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <button type="button" class="btn registration-daily pull-right" style="margin-right: 10px;">
                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <span>メール再送信</span>
            </button>
        </div>
    </div>
    {{-- ページ --}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div align="center">
                {{ $users->links() }}
            </div>
        </div>
    </div>

@endsection