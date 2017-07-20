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
                <a class="navbar-brand" href="{{ url('/') }}"><img src="http://www.fourmix.co.jp/files/user/img/common/fourmix_w.png"></a>
            @else
                <div id="fourmix">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img src="http://www.fourmix.co.jp/files/user/img/common/fourmix_w.png">
                    </a>
                </div>
            @endif

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if (Auth::guest())
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="ホーム">
                            <span class="glyphicon glyphicon-home white"></span>
                        </a>
                        <a href="{{ url('/') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-home white"></span>&nbsp;&nbsp;ホーム
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-log-in white"></span>&nbsp;&nbsp;ログイン
                        </a>
                        {{-- <a href="{{ url('/register') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;新規登録
                        </a> --}}
                    </li>
                </ul>
            @else
            <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <br class="visible-xs-block">
                    <li class="dropdown visible-xs-block">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">

                            <h3 style="color: #9e9e9e">{{ Auth::user()->name }}</h3>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    ログアウト
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <hr class="visible-xs-block">
                    <li>
                        <li role="presentation" class="dropdown">
                            <a href="#" class="my-tooltip hidden-xs dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="閲覧">
                                <span class="glyphicon glyphicon-pencil white"></span> DIALIES
                                <i class="fa fa-caret-down white" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('/daily') }}" >日報作成</a></li>
                                <li role="presentation"><a href="{{ url('/daily/view') }}">日報閲覧</a></li>
                                <li role="presentation"><a href="{{ url('/daily/total') }}">集計</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/daily/view') }}" class="visible-xs-block">
                                <i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;閲覧
                            </a>
                        </li>
                    </li>
                    <li>
                        <li role="presentation" class="dropdown">
                            <a href="#" class="my-tooltip hidden-xs dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="プロジェクト">
                                <span class="glyphicon glyphicon-briefcase white"></span>&nbsp;PROJECTS
                                <i class="fa fa-caret-down white" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('/project') }}">プロジェクト一覧</a></li>
                                <li role="presentation"><a href="{{ url('/project/personal-budget') }}">個人予算</a></li>
                                <li role="presentation"><a href="{{ url('/project/ledger') }}">台帳</a></li>
                                <li role="presentation"><a href="{{ url('/project/project-budget') }}">予算対</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/project') }}" class="visible-xs-block">
                                <span class="glyphicon glyphicon-briefcase white"></span>&nbsp;&nbsp;プロジェクト
                            </a>
                        </li>
                    </li>
                    <li>
                        <li role="presentation" class="dropdown">
                            <a href="#" class="my-tooltip hidden-xs dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="ツール">
                                <i class="fa fa-wrench" aria-hidden="true"></i> TOOLS
                                <i class="fa fa-caret-down white" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('http://localhost/phpmyadmin/') }}" target="_blank">phpMyAdmin</a></li>
                                <li role="presentation"><a href="{{ url('http://www.maatwebsite.nl/laravel-excel/docs') }}" target="_blank">Laravel Excel</a></li>
                            </ul>
                        </li>
                        <a href="{{ url('/home#') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-check white"></span> ツール
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/setting/staff') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-cog white"></span>&nbsp;&nbsp;基本設定
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/config') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-user white"></span>&nbsp;&nbsp;プロフィール
                        </a>
                    </li>
                    {{-- @if(Admin::is_super_admin(Auth::user())) --}}
                        <li>
                            <a href="{{ url('/home#') }}" class="visible-xs-block">
                                <span class="glyphicon glyphicon-wrench white"></span>&nbsp;&nbsp;管理者設定
                            </a>
                        </li>
                    {{-- @endif --}}
                    <br class="visible-xs-block">
                    <br class="visible-xs-block">
                </ul>
            @endif

        <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right hidden-xs">
                @if(Auth::guest())
                @else
                    <li>
                        <li role="presentation" class="dropdown">
                            <a href="#" class="my-tooltip hidden-xs dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="基本設定">
                                <span class="glyphicon glyphicon-cog white"></span>&nbsp;SETTINGS
                                <i class="fa fa-caret-down white" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('/admin/user') }}">担当者</a></li>
                                <li role="presentation"><a href="{{ url('/admin/category') }}">作業分類</a></li>
                                <li role="presentation"><a href="{{ url('/admin/department') }}">部門</a></li>
                                <li role="presentation"><a href="{{ url('/admin/work') }}">勤務分類</a></li>
                                <li role="presentation"><a href="{{ url('/admin/customer') }}">顧客</a></li>
                            </ul>
                        </li>
                    </li>
                @endif
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="ログイン">
                            <span class="glyphicon glyphicon-log-in white"></span>&nbsp;&nbsp;ログイン
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ url('/register') }}" class="my-tooltip hidden-xs">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;新規登録
                        </a>
                    </li> --}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="ログアウト">
                            <span>
                                {{--@if(Auth::user()->photo != '')--}}
                                    {{--<img src="{{ asset('storage/'.Auth::user()->photo) }}" style="padding: 0px;width: 22px;height: 22px;">--}}
                                {{--@else--}}
                                    {{--<img src="{{ asset(Colorable::profileImg(Auth::user()->email)) }}" style="padding: 0px;width: 22px;height: 22px;">--}}
                                {{--@endif--}}
                                    {{ Auth::user()->user_name }}
                            </span>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/config') }}">
                                    <span class="glyphicon glyphicon-user white"></span>&nbsp;&nbsp;プロフィール
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out white"></span>&nbsp;&nbsp;ログアウト
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