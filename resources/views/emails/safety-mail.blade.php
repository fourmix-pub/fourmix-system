@component('mail::message')
# {{ $safetyMail->title }}

{{ $safetyMail->contents }}

<br>
<div align="center">
    安全が確認できている場合は以下のボタンを押してください。
</div>

@component(
'mail::button',
['url' => route('confirmation', ['token' => encrypt($safetyMail->id.'/'.$user->id)])]
)
    安全
@endcomponent

宜しくお願いします。<br>
{{ config('app.name') }}
@endcomponent
