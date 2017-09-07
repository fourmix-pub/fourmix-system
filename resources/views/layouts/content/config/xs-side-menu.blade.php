{{-- スマホ・タブレット用 --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <div class="visible-xs-block visible-sm-block" style="margin-bottom: 2%;">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active">
                <a href="{{ route('profile') }}">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;
                    <span class="hidden-xs">プロフィール変更</span>
                </a>
            </li>
            <li role="presentation">
                <a href="{{ url('/config/password') }}">
                    <i class="fa fa-jpy" aria-hidden="true"></i>&nbsp;
                    <span class="hidden-xs">パスワード変更</span>
                </a>
            </li>
        </ul>
    </div>
</div>