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
                        {{ $event->title }}
                    </h2>
                </div>
            </div>
        </div>
    </div>

    {{-- コンテンツ --}}

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <p class="ev-info">
                {{ $event->contents }}
            </p>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn btn-warning pull-right" aria-label="right Align"
                        data-toggle="modal" data-target="#ev-edit-Modal">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    <span class="hidden-xs">編集</span>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="ev-edit-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times</span></button>
                                <h4 class="modal-title" id="myModalLabel">参加受け付けの設定</h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-danger">
                                            <input type="radio" autocomplete="off">OPEN
                                        </label>
                                        　
                                        <label class="btn btn-primary"style=" border: none">
                                            <input type="radio" autocomplete="off">CLOSE
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal">編集</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 削除ボタン -->
                <button type="button" class="btn btn-danger pull-right" aria-label="right Align"
                        data-toggle="modal" data-target="#ev-del-Modal">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    <span class="hidden-xs">削除</span>
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
                                イベント {{ $event->id }}： {{ $event->title }} を削除しますか？
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
                                <button type="button" class="btn btn-danger" onclick="location.href='{{ url('events') }}'">
                                    削除</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>　
        </div>
    </div>
    <br>
     <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="panel panel-default answers">
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
                             <span class="glyphicon ev-ans ev-ok glyphicon-ok-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-ng glyphicon-remove-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-q glyphicon-question-sign" aria-hidden="true"></span>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             玖家小差
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-q glyphicon-question-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-ng glyphicon-remove-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-ok glyphicon-ok-sign" aria-hidden="true"></span>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             周世其達
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-q glyphicon-question-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-ng glyphicon-remove-sign" aria-hidden="true"></span>
                         </td>
                         <td>
                             <span class="glyphicon ev-ans ev-ok glyphicon-ok-sign" aria-hidden="true"></span>
                         </td>
                     </tr>
                     <tr>
                         <td>
                         </td>
                         <td>
                             <span class="glyphicon ev-ok glyphicon-ok-sign" aria-hidden="true"></span>
                             1名
                             <span class="glyphicon ev-q glyphicon-question-sign" aria-hidden="true"></span>
                             2名
                         </td>
                         <td>
                             <span class="glyphicon ev-ok glyphicon-ok-sign" aria-hidden="true"></span>
                             0名
                             <span class="glyphicon ev-q glyphicon-question-sign" aria-hidden="true"></span>
                             0名
                         </td>
                         <td>
                             <span class="glyphicon ev-ok glyphicon-ok-sign" aria-hidden="true"></span>
                             2名
                             <span class="glyphicon ev-q glyphicon-question-sign" aria-hidden="true"></span>
                             1名
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
                <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
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
                            <div class="panel panel-default">
                                <div class="panel-body">
                                   <div class="row">
                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                           <div class="day1">
                                               8月7日
                                               <div class="btn-group" data-toggle="buttons">
                                                   <label class="btn btn-success" style="border: none">
                                                       <input type="radio" autocomplete="off">
                                                       <span class="glyphicon ev-ans glyphicon-ok-sign" aria-hidden="true"></span>
                                                   </label>
                                                   <label class="btn btn-warning">
                                                       <input type="radio" autocomplete="off">
                                                       <span class="glyphicon ev-ans glyphicon-question-sign" aria-hidden="true"></span>
                                                   </label>
                                                   <label class="btn btn-danger">
                                                       <input type="radio" autocomplete="off">
                                                       <span class="glyphicon ev-ans glyphicon-remove-sign" aria-hidden="true"></span>
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                           <div class="day2">
                                               8月8日
                                               <div class="btn-group" data-toggle="buttons">
                                                   <label class="btn btn-success" style="border: none">
                                                       <input type="radio" autocomplete="off">
                                                       <span class="glyphicon ev-ans glyphicon-ok-sign" aria-hidden="true"></span>
                                                   </label>
                                                   <label class="btn btn-warning">
                                                       <input type="radio" autocomplete="off">
                                                       <span class="glyphicon ev-ans glyphicon-question-sign" aria-hidden="true"></span>
                                                   </label>
                                                   <label class="btn btn-danger">
                                                       <input type="radio" autocomplete="off">
                                                       <span class="glyphicon ev-ans glyphicon-remove-sign" aria-hidden="true"></span>
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">送信</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('events.events') }}" class="btn btn-primary">戻る</a>
        </div>
    </div>
@endsection