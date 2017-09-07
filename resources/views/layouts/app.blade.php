<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.common.link')

    <title>@yield('title')</title>

</head>
<body>
        @if(!app()->environment('testing'))
            @include('layouts.pageloader')
        @endif
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
        @if(!app()->environment('testing'))
            @include('layouts.common.footer')
        @endif

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
</body>
</html>
