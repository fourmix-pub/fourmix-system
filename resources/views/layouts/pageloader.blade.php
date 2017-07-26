<div id="bonfire-pageloader">

    <div class="bonfire-pageloader-icon">
        <div align="center">
            <img alt="Bootstrap Image Preview" id="loading-12-icon" src="http://www.fourmix.co.jp/files/user/img/common/logo_o.png" width="250%" style="margin-left: -90px" />
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