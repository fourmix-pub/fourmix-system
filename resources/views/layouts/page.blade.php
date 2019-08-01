<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.common.link')

    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
