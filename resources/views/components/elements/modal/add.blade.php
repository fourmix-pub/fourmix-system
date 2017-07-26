<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="modal fade" id="add" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="margin:2% 0%; ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{ $title }}</h4>
                    </div>
                    <form class="form-horizontal">
                        <div class="modal-body">

                            {{ $slot }}

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>