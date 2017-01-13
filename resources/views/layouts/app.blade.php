<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.common.link')

    <title>{{ config('app.name') }}</title>

</head>
<body>
        @include('layouts.common.header')

        <div class="container">
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
    </script>
</body>
</html>
