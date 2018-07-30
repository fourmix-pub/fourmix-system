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
                        小林さん結婚お祝いパーティ
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <p>
                小林さんの結婚を祝ってみんなで楽しく飲みましょう。
            </p>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button type="button" class="btn btn-warning btn-xs" aria-label="right Align"
                    data-toggle="modal" data-target="#ev-edit-Modal">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="ev-edit-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times</span></button>
                            <h4 class="modal-title" id="myModalLabel">イベント編集</h4>
                        </div>
                        <div class="modal-body">
                            <form>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">閉じる</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">編集</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 編集ボタン -->
            <button type="button" class="btn btn-xs btn-danger" aria-label="right Align"
                    data-toggle="modal" data-target="#ev-del-Modal">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="ev-del-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times</span></button>
                            <h4 class="modal-title" id="myModalLabel">イベント削除</h4>
                        </div>
                        <div class="modal-body">
                            イベント1：小林さん結婚お祝いパーティ を削除しますか？
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">閉じる</button>
                            <button type="button" class="btn btn-danger" onclick="location.href='{{ url('events') }}'">
                                削除</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
     <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="panel panel-default">
                 <!-- Default panel contents -->
                 <table class="table ans-table">
                     <tr>
                         <th>
                             参加者名
                         </th>
                         <th>
                             7/29 19:00~
                         </th>
                         <th>
                             8/7 19:00~
                         </th>
                         <th>
                             8/8 19:30~
                         </th>
                     </tr>
                     <tr>
                         <td>
                             藍上丘季
                         </td>
                         <td>
                             <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon glyphicon-trash-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             玖家小差
                         </td>
                         <td>
                             <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             △
                         </td>
                         <td>
                             ◯
                         </td>
                     </tr>
                     <tr>
                         <td>
                             周世其達
                         </td>
                         <td>
                             △
                         </td>
                         <td>
                             ×
                         </td>
                         <td>
                             ◯
                         </td>
                     </tr>
                 </table>
             </div>
         </div>
     </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- Button trigger modal -->
            <div align="center">
            <button type="button" class="btn btn-success btn-lg ev-ans-btn" data-toggle="modal" data-target="#myModal">
                出欠
            </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">出欠確認</h4>
                        </div>
                        <div class="modal-body">
                            <div class="day1">
                                8月7日
                                <button type="button" class="btn btn-success" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="day1">
                                8月8日
                                <button type="button" class="btn btn-success" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                                </button>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection