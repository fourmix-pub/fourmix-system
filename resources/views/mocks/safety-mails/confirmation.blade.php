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
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>再送信</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>大澤乃梨子</td>
                                    <td>
                                        <span class="label label-success">
                                             <i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i> 確認
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

                                <tr>
                                    <td>大澤乃梨子</td>
                                    <td>
                                        <span class="label label-default">
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
                        <button type="button" class="btn btn-success pull-right" style="margin-right: 10px;">
                            <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <span>メール再送信</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection