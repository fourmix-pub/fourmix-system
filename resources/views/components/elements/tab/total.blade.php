<div class="panel panel-default">
    <div class="panel-body">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="text-center">
                    {{ $title }}
                    <br>
                    <small>{{ $sub_title }}</small>
                </h3>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
                <button class="btn btn-default print-budget">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"> 出力</span>
                </button>
            </div>
        </div>

        {{-- navs --}}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab1" role="tab" data-toggle="tab">概要</a></li>
                    <li role="presentation"><a href="#tab2" role="tab" data-toggle="tab">棒グラフ</a></li>
                    <li role="presentation"><a href="#tab3" role="tab" data-toggle="tab">円グラフ</a></li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                        <br>
                        {{ $tab1 }}
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                        <br>
                        {{ $tab2 }}
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                        <br>
                        {{ $tab3 }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>