<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.common.link')

    <title>@yield('title')</title>

</head>
<body>
        @include('layouts.pageloader')
        @include('layouts.common.header')

        <div class="container">
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @include('layouts.common.message')
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('layouts.common.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        //時間
        $(function(){
            setInterval(function(){
                $(".currentTime").text(new Date().toLocaleString());
            },100);
        });
        $(function () {
            $('[data-toggle="popover"]').popover();
        });
    </script>

    @yield('js')
</body>
</html>
