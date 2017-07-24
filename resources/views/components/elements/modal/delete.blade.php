<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="modal fade" id="delete" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="margin:2% 0%; ">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">{{ $title }}</h4>
                    </div>
                    <div class="modal-body" style="margin:2% 0%;">
                        <h4>{{ $slot }} を削除しますか？</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">削除</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>