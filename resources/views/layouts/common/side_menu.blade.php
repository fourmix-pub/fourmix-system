{{-- スマホ用 --}}
<div class="panel panel-default visible-sm-block visible-xs-block">
		@yield('layout.setting.side_menu_smart')
</div>

{{-- PC用 --}}
<div class="col-md-3">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default hidden-sm hidden-xs">
        	@yield('setting.side_menu')
        </div>
    </div>
</div>