@component('mail::message')
# {{ $safetyMail->title }}

{{ $safetyMail->contents }}

@component(
'mail::button',
['url' => route('confirmation', ['token' => encrypt($safetyMail->id.'/'.$user->id)])]
)
    安全
@endcomponent

宜しくお願いします。<br>
{{ config('app.name') }}
@endcomponent
