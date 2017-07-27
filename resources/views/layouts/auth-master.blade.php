<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.common.link')

    <title>@yield('title')</title>

    <style>
        body {
            background-image: url("{{ bg_img() }}");
            background-repeat: no-repeat;
            background-position: 0 50%;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding-bottom: 0;
            padding-top: 0;
        }
        .form-control {
            height: 40px;
        }
        .form-group {
            font-size: 16px;
        }
        .panel {
            background-color: rgba(255, 255, 255, 0.72);
            border: none;
        }
        .panel h2 {
            color: #ff5810;
        }
        .login-link {
            color: #ff5810;
            font-size: 16px;
        }
        .btn-default {
            border: none;
            background-color: #000000;
            color: #ffffff;
        }
        .btn-default:hover {
            background-color: #ff5810;
            color: #ffffff;
        }
        .btn-default.focus, .btn-default:focus, .btn-default:active:focus {
            outline: none;
        }
    </style>

</head>
<body>
        @include('layouts.pageloader')

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>

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
