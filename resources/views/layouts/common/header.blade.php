<nav class="navbar navbar-default navbar-fixed-top navbar-inverse header-fourmix" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            @if (Auth::guest())
                <div class="fourmix">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/fourmix_w.png') }}">
                    </a>
                </div>
            @else
                <div class="fourmix">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="{{ asset('img/fourmix_w.png') }}">
                    </a>
                </div>
            @endif

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if (Auth::guest())
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/login') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;LOGIN
                        </a>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav visible-xs-block">
                    <li><br class="visible-xs-block"></li>
                    <li class="dropdown visible-xs-block">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <h3>{{ Auth::user()->user_name }} </h3>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/config') }}">
                                    プロフィール
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    ログアウト
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li><hr class="visible-xs-block"></li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="日報">
                            DAILY REPORTS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('/daily') }}" >日報作成</a></li>
                            <li role="presentation"><a href="{{ url('/daily/view') }}">日報閲覧</a></li>
                            <li role="presentation"><a href="{{ url('/daily/total') }}">集計</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="プロジェクト">
                            PROJECTS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('/project') }}">プロジェクト一覧</a></li>
                            <li role="presentation"><a href="{{ url('/project/personal-budget') }}">個人予算</a></li>
                            <li role="presentation"><a href="{{ url('/project/ledger') }}">台帳</a></li>
                            <li role="presentation"><a href="{{ url('/project/project-budget') }}">予算対</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="ツール">
                            TOOLS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('http://localhost/phpmyadmin/') }}" target="_blank">phpMyAdmin</a></li>
                            <li role="presentation"><a href="{{ url('http://www.maatwebsite.nl/laravel-excel/docs') }}" target="_blank">Laravel Excel</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="基本設定">
                            SETTINGS&nbsp;
                            <i class="fa fa-caret-down " aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('/admin/user') }}">担当者</a></li>
                            <li role="presentation"><a href="{{ url('/admin/category') }}">作業分類</a></li>
                            <li role="presentation"><a href="{{ url('/admin/department') }}">部門</a></li>
                            <li role="presentation"><a href="{{ url('/admin/work') }}">勤務分類</a></li>
                            <li role="presentation"><a href="{{ url('/admin/customer') }}">顧客</a></li>
                        </ul>
                    </li>
                </ul>

            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right hidden-xs">
                @if(Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="ログイン">
                            LOGIN
                        </a>
                    </li>
                @else
                    <li role="presentation" class="dropdown active">{{-- TODO: active 実装 --}}
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="日報">
                            DAILY REPORTS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('/daily') }}" >日報作成</a></li>
                            <li role="presentation"><a href="{{ url('/daily/view') }}">日報閲覧</a></li>
                            <li role="presentation"><a href="{{ url('/daily/total') }}">集計</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="プロジェクト">
                            PROJECTS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('/project') }}">プロジェクト一覧</a></li>
                            <li role="presentation"><a href="{{ url('/project/personal-budget') }}">個人予算</a></li>
                            <li role="presentation"><a href="{{ url('/project/ledger') }}">台帳</a></li>
                            <li role="presentation"><a href="{{ url('/project/project-budget') }}">予算対</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="ツール">
                            TOOLS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('http://localhost/phpmyadmin/') }}" target="_blank">phpMyAdmin</a></li>
                            <li role="presentation"><a href="{{ url('http://www.maatwebsite.nl/laravel-excel/docs') }}" target="_blank">Laravel Excel</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="基本設定">
                            SETTINGS&nbsp;
                            <i class="fa fa-caret-down " aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ url('/admin/user') }}">担当者</a></li>
                            <li role="presentation"><a href="{{ url('/admin/category') }}">作業分類</a></li>
                            <li role="presentation"><a href="{{ url('/admin/department') }}">部門</a></li>
                            <li role="presentation"><a href="{{ url('/admin/work') }}">勤務分類</a></li>
                            <li role="presentation"><a href="{{ url('/admin/customer') }}">顧客</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="ユーザー">
                            {{ Auth::user()->user_name }}&nbsp;
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/config') }}">
                                    プロフィール
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    ログアウト
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>