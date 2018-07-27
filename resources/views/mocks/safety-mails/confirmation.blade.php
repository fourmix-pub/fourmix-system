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
                <table class="table table-bordered">

                    <thead>
                        <tr class="active">
                            <th>氏名</th>
                            <th>所属</th>
                            <th>安否</th>
                            <th>再送信</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>大澤乃梨子</td>
                            <td>システムデザイングループ</td>
                            <td class="table-center">
                                <span class="label label-success safety-status">
                                    <i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i> 確認
                                </span>
                            </td>
                            <td class="table-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>大澤乃梨子</td>
                            <td>システムデザイングループ</td>
                            <td class="table-center">
                            <span class="label label-default safety-status">
                                <i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i> 未確認
                            </span>
                            </td>
                            <td class="table-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>大澤乃梨子</td>
                            <td>システムデザイングループ</td>
                            <td class="table-center">
                                <span class="label label-success safety-status">
                                    <i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i> 確認
                                </span>
                            </td>
                            <td class="table-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>大澤乃梨子</td>
                            <td>システムデザイングループ</td>
                            <td class="table-center">
                                <span class="label label-success safety-status">
                                    <i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i> 確認
                                </span>
                            </td>
                            <td class="table-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>大澤乃梨子</td>
                            <td>システムデザイングループ</td>
                            <td class="table-center">
                                <span class="label label-default safety-status">
                                    <i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i> 未確認
                                </span>
                            </td>
                            <td class="table-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                    </label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>大澤乃梨子</td>
                            <td>システムデザイングループ</td>
                            <td class="table-center">
                                <span class="label label-success safety-status">
                                    <i class="glyphicon glyphicon-ok-sign" aria-hidden="true"></i> 確認
                                </span>
                            </td>
                            <td class="table-center">
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

    <div class="row">
        <div align="center">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection