@component('mail::message')
【テスト送信】
# {{ $title }}

{{ $contents }}

@component(
'mail::button',
['url' => '#']
)
    安全
@endcomponent

宜しくお願いします。<br>
{{ config('app.name') }}
@endcomponent