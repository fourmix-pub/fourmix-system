<!-- meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Styles -->
<link href="/css/app.css" rel="stylesheet">
<script src="/js/app.js"></script>

<!-- Scripts -->
<script>
    //時間
    $(function(){
        setInterval(function(){
            $(".currentTime").text(new Date().toLocaleString());
        },100);
    });
    //Token
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
</script>
