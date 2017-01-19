@extends('layouts.app')

@section('title')
    作業分類設定
@endsection

@section('content')

<div class="row-inline">
    @include('layouts.content.setting.side_menu')
</div>

<div class="row-inline">
    {{-- タイトル --}}
    <div class="col-md-8">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
                <h3>
                    <i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;作業分類
                    <button type="button" class="btn btn-danger pull-right" style="margin: 0% 1%;" data-toggle="modal" data-target="#add">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;追加
                    </button>
                </h3>
            </div>
            
            {{-- モーダル：追加ボタン --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="modal fade" id="add" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="margin:2% 0%; ">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">作業分類追加</h4>
                            </div>
                            <div class="form-horizontal">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label class="col-xs-3 control-label" for="work">作業分類名*</label>
                                            <div class="col-xs-8">
                                                <input type="text" class="form-control" id="work"  placeholder="作業分類名" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                                    <button type="button" class="btn btn-primary"　 data-dismiss="modal">登録</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- 一覧 --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row" style="margin: 0% 1%;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>作業分類</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>調査</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>見積・営業活動</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>分析</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>設計</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>実装</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>テスト</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>納品作業</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>打合せ</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>その他</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>トラブル対応</td>
                                <td align="center">
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#add"　title="編集">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button type="button" class="btn btn-ghost" data-toggle="modal" data-target="#myModal"　title="削除">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" align="center">
                                    <nav class="pagination text-right">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="前のページへ">
                                                    <span aria-hidden="true">«</span>
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li>
                                                <a href="#" aria-label="次のページへ">
                                                    <span aria-hidden="true">»</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
