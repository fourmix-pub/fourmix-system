<nav class="navbar-inverse navbar-fixed-bottom hidden-xs" role="navigation">
    <div class="container-fluid">
        <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div align="center" style="color: #ffffff">
                Powered by <a style="color: #ffffff" href="{{ url('http://www.fourmix.co.jp/') }}" target="_blank">{{ config('app.name') }}</a> - Version
                <a style="color: #ffffff" href="https://github.com/fourmix-pub/fourmix-system/releases">{{ config('app.version') }}</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="currentTime" align="center" style="color: #ffffff"></div>
        </div>

    </div>
</nav>

<div class="container-fluid visible-xs-block">
    <div class="row">
        <hr>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="currentTime" align="center"></div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div align="center">
                Powered by <a href="{{ url('http://www.fourmix.co.jp/') }}" target="_blank">{{ config('app.name') }}</a>.
            </div>
        </div>
    </div>
</div>