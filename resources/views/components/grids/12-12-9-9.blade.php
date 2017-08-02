<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        {{ $slot }}
    </div>

    {{-- スマホ版サイドメニュー --}}
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        {{ $side ?? '' }}
    </div>
</div>