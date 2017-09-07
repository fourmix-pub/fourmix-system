@extends('layouts.app')

@section('title')
    作業分類設定
@endsection

@section('content')

{{-- タイトル --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="page-header">
            <h2>
                WORK TYPES
            </h2>
        </div>
    </div>
</div>

{{-- モーダル:追加ボタン --}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @include('layouts.work-types.create')
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
                    作業分類
                </th>
                <th class="active">
                </th>
            @endslot

            @slot('tbody')
                @foreach($workTypes as $workType)
                    <tr>
                        <th scope="row">{{ $workType->id }}</th>
                        <td>{{ $workType->name }}</td>
                        <td>
                            {{-- モーダル：編集ボタン --}}
                            @include('layouts.work-types.edit')
                            @include('layouts.work-types.delete')
                        </td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                {{ $workTypes->links() }}
            </div>
        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        @include('layouts.content.setting.side-menu')
    </div>
</div>
@endsection