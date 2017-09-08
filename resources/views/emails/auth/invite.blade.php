@component('mail::message')
# {{ $token->user->name }} 様

社内ログシステムへようこそ！！
新しく {{ $token->user->name }} 様のアカウントが作成されました。
続いてご自身のパスワード設定を行ってください。

@component('mail::button', ['url' => route('password.set', ['token' => $token->token])])
パスワード設定
@endcomponent

宜しくお願い致します<br>
{{ config('app.name') }}
@endcomponent
