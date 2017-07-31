{{-- スマホ・タブレット用 --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="visible-xs-block visible-sm-block" style="margin-bottom: 2%;">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active">
                <a href="{{ url('/daily/view') }}">
                    <i class="glyphicon glyphicon-eye-open"></i>
                    <span class="hidden-xs">日報閲覧</span>
                </a>
            </li>
            <li role="presentation">
                <a href="{{ url('/daily/total') }}">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                    <span class="hidden-xs">集計</span>
                </a>
            </li>
        </ul>
    </div>
</div>