@extends('layouts.app')

@section('title')
    作業分類設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h3>
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;作業分類
                <button type="button" class="btn btn-danger pull-right" style="margin-right: 15%;" data-toggle="modal" data-target="#add">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;&nbsp;追加
                </button>
            </h3>
        </div>
    </div>
</div>

{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

        {{-- PC版サイドメニュー --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('layouts.content.setting.xs-side-menu')
            </div>
        </div>
            
        {{-- モーダル：追加ボタン --}}
        @component('components.elements.modal.add', ['title'=>'作業分類追加'])
            @component('components.elements.form.modal.text',['name'=>'name'])
            作業分類名
            @endcomponent
        @endcomponent

        {{-- モーダル：編集ボタン --}}
        @component('components.elements.modal.update', ['title'=>'作業分類編集'])
            @component('components.elements.form.modal.text',['name'=>'name'])
                作業分類名
            @endcomponent
        @endcomponent

        {{-- モーダル：削除ボタン --}}
        @component('components.elements.modal.delete')
        @endcomponent

        {{-- 一覧 --}}
        @component('components.elements.table.admin.table')

            <?php
            $theads=['ID','作業分類',''];

            $tbody1=['id'=>1,'category'=>'調査'];
            $tbody2=['id'=>2,'category'=>'見積・営業活動'];
            $tbody3=['id'=>3,'category'=>'設計'];
            $tbody4=['id'=>4,'category'=>'実装'];
            $tbody5=['id'=>5,'category'=>'テスト'];

            $tbodys=[$tbody1,$tbody2,$tbody3,$tbody4,$tbody5];
            ?>

            @component('components.elements.table.admin.thead',['theads'=>$theads])
            @endcomponent

            <tbody>
                @foreach($tbodys as $tbody)
                    <tr>
                        <th scope="row">{{ $tbody['id'] }}</th>
                        <td>{{ $tbody['category'] }}</td>
                        @component('components.elements.table.admin.button')
                        @endcomponent
                    </tr>
                @endforeach
            </tbody>

        @endcomponent

    </div>

    {{-- スマホ版サイドメニュー --}}
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('layouts.content.setting.side-menu')
    </div>
</div>
@endsection