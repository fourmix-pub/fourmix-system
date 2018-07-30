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
            <div class="panel panel-default event-detail-detail">
                <div class="panel-body">
                    <p>
                        説明文説明文説明文
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <button type="button" class="btn btn-warning" aria-label="right Align"
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
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">編集</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 編集ボタン -->
            <button type="button" class="btn btn-danger" aria-label="right Align"
                    data-toggle="modal" data-target="#ev-del-Modal">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="ev-del-Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">イベント削除</h4>
                        </div>
                        <div class="modal-body">
                            削除しますか？
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" onclick="location.href='{{ url('events') }}'">
                                削除</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
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
                 <div class="panel-heading">8月7日 19:00~</div>
                 <table class="table ans-table">
                     <tr>
                         <td>
                             藍上丘季
                         </td>
                         <td>
                             ×
                         </td>
                         <td>
                             ◯
                         </td>
                         <td>
                             ×
                         </td>
                     </tr>
                     <tr>
                         <td>
                             玖家小差
                         </td>
                         <td>
                             △
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
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">8月7日 19:00~</div>
                <table class="table ans-table">
                    <tr>
                        <td>
                            藍上丘季
                        </td>
                        <td>
                            ×
                        </td>
                        <td>
                            ◯
                        </td>
                        <td>
                            ×
                        </td>
                    </tr>
                    <tr>
                        <td>
                            玖家小差
                        </td>
                        <td>
                            △
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
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                出欠
            </button>
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