<div id="bonfire-pageloader">

    <div class="bonfire-pageloader-icon">
        <div align="center">
            <img alt="Bootstrap Image Preview" id="loading-12-icon" src="{{ asset('img/logo_o.png') }}" width="200%" style="margin-left: -55px" />
        </div>
        <div align="center">
            <h4>
                <i class="fa fa-spinner fa-pulse fa-fw"></i>
            </h4>
        </div>
    </div>

    <script>
        $(window).resize(function(){
            resizenow();
        });
        function resizenow() {
            var browserwidth = $(window).width();
            var browserheight = $(window).height();
            $(".bonfire-pageloader-icon").css('right', ((browserwidth - $(".bonfire-pageloader-icon").width())/2)).css('top', ((browserheight - $(".bonfire-pageloader-icon").height())/2));
        }
        resizenow();
    </script>

</div>