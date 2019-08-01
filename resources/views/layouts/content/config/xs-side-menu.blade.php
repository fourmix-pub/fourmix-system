{{-- スマホ・タブレット用 --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <div class="visible-xs-block visible-sm-block" style="margin-bottom: 2%;">
        <ul class="nav nav-tabs">
            <li role="presentation" class="@if($mode == 'profile') active @endif">
                <a href="{{ route('profile') }}">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;
                    <span class="hidden-xs">プロフィール変更</span>
                </a>
            </li>
            <li role="presentation" class="@if($mode == 'password') active @endif">
                <a href="{{ url('/config/password') }}">
                    <i class="fa fa-jpy" aria-hidden="true"></i>&nbsp;
                    <span class="hidden-xs">パスワード変更</span>
                </a>
            </li>
            <li role="presentation" class="@if($mode == 'developer') active @endif">
                <a href="{{ route('developer') }}">
                    <i class="fa fa-jpy" aria-hidden="true"></i>&nbsp;
                    <span class="hidden-xs">開発向け設定</span>
                </a>
            </li>
        </ul>
    </div>
</div>