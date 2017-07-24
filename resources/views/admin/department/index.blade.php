@extends('layouts.app')

@section('title')
    部門設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h2>
                Department
                <button type="button" class="btn btn-danger pull-right" style="margin-right: 10px;" data-toggle="modal" data-target="#add">
                    <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
                </button>
            </h2>
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
        @component('components.elements.modal.add', ['title'=>'部門追加'])
            @component('components.elements.form.modal.text',['name'=>'department'])
                部門名
            @endcomponent
        @endcomponent

        {{-- モーダル：編集ボタン --}}
        @component('components.elements.modal.update', ['title'=>'部門編集'])
            @component('components.elements.form.modal.text',['name'=>'department'])
                部門名
            @endcomponent
        @endcomponent

        {{-- モーダル：削除ボタン --}}
        @component('components.elements.modal.delete', ['title'=>'部門削除'])
            その他
        @endcomponent
 
        {{-- 一覧 --}}
        @component('components.elements.table.admin.table')

                        <?php
                        $theads=['ID','部門',''];

                        $tbody1=['id'=>1,'department'=>'システムデザイン',];
                        $tbody2=['id'=>2,'department'=>'コンセプトデザイン'];
                        $tbody3=['id'=>3,'department'=>'サポートデザイン'];
                        $tbody4=['id'=>4,'department'=>'その他'];

                        $tbodys=[$tbody1,$tbody2,$tbody3,$tbody4];
                        ?>

                        @component('components.elements.table.admin.thead',['theads'=>$theads])
                        @endcomponent

                        <tbody>

                            @foreach($tbodys as $tbody)
                            <tr>
                                <th scope="row">{{ $tbody['id'] }}</th>
                                <td>{{ $tbody['department'] }}</td>
                                @component('components.elements.table.admin.button')
                                @endcomponent
                            </tr>
                            @endforeach
        @endcomponent
    </div>

    {{-- スマホ版サイドメニュー --}}
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('layouts.content.setting.side-menu')
    </div>
</div>
@endsection