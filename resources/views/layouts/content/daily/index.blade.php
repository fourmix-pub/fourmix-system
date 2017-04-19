@extends('layouts.app')

@section('title')
    
@endsection

@section('content')

<div class="row-inline">
    @include('layouts.content.daily.side-menu')
</div>

<div class="row-inline">
    {{-- タイトル --}}
    <div class="col-md-8">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="page-header">
            </div>
        </div>
        
    </div>
</div>
@endsection
