<!-- meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Styles -->
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('/css/test.css') }}" rel="stylesheet">

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

<!-- Icon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" href="{{ asset('/favicon-32x32.png') }}" sizes="32x32">
<link rel="icon" type="image/png" href="{{ asset('/favicon-16x16.png') }}" sizes="16x16">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
<link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#ea6710">
<meta name="theme-color" content="#ffffff">

<!-- Scripts -->
<script src="{{ asset('js/lib.js') }}"></script>
<script>
    //Token
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
<script type="text/javascript">
    // 時間入力
    $(function () {
        $('.time').datetimepicker({
            format: 'HH:mm'
        });
    });
    // 日付入力
    $(function () {
        $('.day').datetimepicker({
            format : 'YYYY-MM-DD',
            locale : 'ja',
            dayViewHeaderFormat : 'YYYY年M月'
        });
    });
</script>
