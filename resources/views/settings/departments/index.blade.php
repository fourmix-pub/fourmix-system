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
                DEPARTMENTS
            </h2>
        </div>
    </div>
</div>

{{-- モーダル:追加ボタン --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @include('layouts.departments.create')
    </div>
</div>

<br>

{{-- コンテンツ --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">

        {{-- PC版サイドメニュー --}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                @include('layouts.content.setting.xs-side-menu')
            </div>
        </div>

        {{-- 一覧 --}}
        @component('components.elements.table.table')

            @slot('thead')
                <th class="active">
                    ID
                </th>
                <th class="active">
                    部門
                </th>
                <th class="active">
                </th>
            @endslot

            @slot('tbody')
                @foreach($departments as $department)
                    <tr>
                        <th scope="row">{{ $department->id }}</th>
                        <td>{{ $department->name }}</td>
                        <td>
                            {{-- モーダル：編集ボタン --}}
                            @include('layouts.departments.edit')
                            @include('layouts.departments.delete')
                        </td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent
    </div>

    {{-- スマホ版サイドメニュー --}}
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('layouts.content.setting.side-menu')
    </div>
</div>
@endsection