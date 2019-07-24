{{-- PC用 --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <div class="list-group hidden-sm hidden-xs">
        <a class="list-group-item" href="{{ route('profile') }}">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;プロフィール情報
        </a>
        <a class="list-group-item" href="{{ url('/config/password') }}">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;パスワード変更
        </a>
        <a class="list-group-item" href="{{ route('developer') }}">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;開発向け設定
        </a>
    </div>
</div>