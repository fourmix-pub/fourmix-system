<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
            @else
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name') }}
                </a>
            @endif
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            @if (Auth::guest())
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="ホーム">
                            <span class="glyphicon glyphicon-home"></span>
                        </a>
                        <a href="{{ url('/') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;ホーム
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;ログイン
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
                                <span class="glyphicon glyphicon-pencil"></span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('/daily') }}" >日報作成</a></li>
                                <li role="presentation"><a href="{{ url('/daily/view') }}">日報</a></li>
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
                                <span class="glyphicon glyphicon-briefcase"></span>&nbsp;
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('/project') }}">一覧</a></li>
                                <li role="presentation"><a href="{{ url('/project/personal-budget') }}">個人予算</a></li>
                                <li role="presentation"><a href="{{ url('/project/ledger') }}">台帳</a></li>
                                <li role="presentation"><a href="{{ url('/project/project-budget') }}">予算対</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/project') }}" class="visible-xs-block">
                                <span class="glyphicon glyphicon-briefcase"></span>&nbsp;&nbsp;プロジェクト
                            </a>
                        </li>
                    </li>
                    <li>
                        <li role="presentation" class="dropdown">
                            <a href="#" class="my-tooltip hidden-xs dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="ツール">
                                <span class="glyphicon glyphicon-check"></span>
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('http://localhost/phpmyadmin/') }}" target="_blank">phpMyAdmin</a></li>
                                <li role="presentation"><a href="{{ url('http://www.maatwebsite.nl/laravel-excel/docs') }}" target="_blank">Laravel Excel</a></li>
                            </ul>
                        </li>
                        <a href="{{ url('/home#') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-check"></span> ツール
                        </a>
                    </li>
                    {{--<li>
                        <a href="{{ url('/schedule') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="スケジュール">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </a>
                        <a href="{{ url('/schedule') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-calendar"></span> {{ trans('header.schedule') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/time-sheet') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="{{ trans('header.time-sheet') }}">
                            <span class="glyphicon glyphicon-time"></span>
                        </a>
                        <a href="{{ url('/time-sheet') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-time"></span> {{ trans('header.time-sheet') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/message') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="{{ trans('header.message') }}">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </a>
                        <a href="{{ url('/message') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-envelope"></span> {{ trans('header.message') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/bbs') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="{{ trans('header.bbs') }}">
                            <span class="glyphicon glyphicon-comment"></span>
                        </a>
                        <a href="{{ url('/bbs') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-comment"></span> {{ trans('header.bbs') }}
                        </a>
                    </li>--}}
                    <li>
                        <a href="{{ url('/setting/staff') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;基本設定
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/config') }}" class="visible-xs-block">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;プロフィール
                        </a>
                    </li>
                    {{-- @if(Admin::is_super_admin(Auth::user())) --}}
                        <li>
                            <a href="{{ url('/home#') }}" class="visible-xs-block">
                                <span class="glyphicon glyphicon-wrench"></span>&nbsp;&nbsp;管理者設定
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
                                <span class="glyphicon glyphicon-cog"></span>&nbsp;
                                <i class="fa fa-caret-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a href="{{ url('/setting/staff') }}">担当者</a></li>
                                <li role="presentation"><a href="{{ url('/setting/work') }}">作業分類</a></li>
                                <li role="presentation"><a href="{{ url('/setting/departments') }}">部門</a></li>
                                <li role="presentation"><a href="{{ url('/setting/service') }}">勤務分類</a></li>
                                <li role="presentation"><a href="{{ url('/setting/customers') }}">顧客</a></li>
                            </ul>
                        </li>
                    </li>
                    {{-- @if(Admin::is_super_admin(Auth::user())) --}}
                    <li>
                        <a href="{{ url('/home#') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="管理者設定">
                            <span class="glyphicon glyphicon-wrench"></span>
                        </a>
                    </li>
                    {{-- @endif --}}
                @endif
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/login') }}" class="my-tooltip hidden-xs" data-placement="bottom" title="ログイン">
                            <span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;ログイン
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
                                    {{ Auth::user()->name }}
                            </span>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/config') }}">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;プロフィール
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;ログアウト
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