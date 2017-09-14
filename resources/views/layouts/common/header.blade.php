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
                    <a class="navbar-brand" href="{{ route('dailies.index') }}">
                        <img src="{{ asset('img/fourmix_w.png') }}">
                    </a>
                </div>
            @else
                <div class="fourmix">
                    <a class="navbar-brand" href="{{ route('dailies.index') }}">
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
                            <h3>{{ Auth::user()->name }} </h3>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('profile') }}">
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
                            <li role="presentation"><a href="{{ route('dailies.index') }}" >日報作成</a></li>
                            <li role="presentation"><a href="{{ route('daily.view') }}">日報閲覧</a></li>
                            <li role="presentation"><a href="{{ route('daily.analytics.workTypes.byProject') }}">集計</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="プロジェクト">
                            PROJECTS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('projects.index') }}">プロジェクト一覧</a></li>
                            <li role="presentation"><a href="{{ route('personal-budgets.index') }}">個人予算</a></li>
                            <li role="presentation"><a href="{{ route('projects.details') }}">台帳</a></li>
                            <li role="presentation"><a href="{{ route('projects.budgets.project') }}">予算対</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="ツール">
                            TOOLS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach(config('menu.tools') as $key => $value)
                                <li role="presentation"><a href="{{ $value }}" target="_blank">{{ $key }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="基本設定">
                            SETTINGS&nbsp;
                            <i class="fa fa-caret-down " aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('users.index') }}">担当者</a></li>
                            <li role="presentation"><a href="{{ route('work-types.index') }}">作業分類</a></li>
                            <li role="presentation"><a href="{{ route('departments.index') }}">部門</a></li>
                            <li role="presentation"><a href="{{ route('job-types.index') }}">勤務分類</a></li>
                            <li role="presentation"><a href="{{ route('customers.index') }}">顧客</a></li>
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
                    <li role="presentation" class="dropdown @if($nav == 'dailies') active @endif">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="日報">
                            DAILY REPORTS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('dailies.index') }}" >日報作成</a></li>
                            <li role="presentation"><a href="{{ route('daily.view') }}">日報閲覧</a></li>
                            <li role="presentation"><a href="{{ route('daily.analytics.workTypes.byProject') }}">集計</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown @if($nav == 'projects') active @endif">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="プロジェクト">
                            PROJECTS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('projects.index') }}">プロジェクト一覧</a></li>
                            <li role="presentation"><a href="{{ route('personal-budgets.index') }}">個人予算</a></li>
                            <li role="presentation"><a href="{{ route('projects.details') }}">台帳</a></li>
                            <li role="presentation"><a href="{{ route('projects.budgets.project') }}">予算対</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="ツール">
                            TOOLS&nbsp;
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            @foreach(config('menu.tools') as $key => $value)
                                <li role="presentation"><a href="{{ $value }}" target="_blank">{{ $key }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown @if($nav == 'settings') active @endif">
                        <a href="#" class="dropdown-toggle"  data-toggle="dropdown" data-placement="bottom" title="基本設定">
                            SETTINGS&nbsp;
                            <i class="fa fa-caret-down " aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('users.index') }}">担当者</a></li>
                            <li role="presentation"><a href="{{ route('work-types.index') }}">作業分類</a></li>
                            <li role="presentation"><a href="{{ route('departments.index') }}">部門</a></li>
                            <li role="presentation"><a href="{{ route('job-types.index') }}">勤務分類</a></li>
                            <li role="presentation"><a href="{{ route('customers.index') }}">顧客</a></li>
                        </ul>
                    </li>
                    <li role="presentation" class="dropdown @if($nav == 'users') active @endif">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="ユーザー">
                            {{ Auth::user()->name }}&nbsp;
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('profile') }}">
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