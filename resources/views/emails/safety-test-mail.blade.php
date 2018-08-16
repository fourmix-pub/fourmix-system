@component('mail::message')
【テスト送信】
# {{ $title }}

{{ $contents }}

<br>
<div align="center">
    安全が確認できている場合は以下のボタンを押してください。
</div>

@component(
'mail::button',
['url' => '#']
)
    安全
@endcomponent

宜しくお願いします。<br>
{{ config('app.name') }}
@endcomponent