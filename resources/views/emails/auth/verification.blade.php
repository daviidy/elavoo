@component('mail::message')
# Bonjour

Vous recevez cet e-mail pour l'activiation de votre compte sur {{config('app.name')}}

@component('mail::button', ['url' => route('account.activate', $token)])
Activer mon compte
@endcomponent

Si vous pensez ne pas être à l'origine de cette inscription, veuillez ignorez cet email.<br>

Remerciements,<br>
{{ config('app.name') }}

<hr>
Si vous avez des difficultés à cliquer sur le bouton "Activer mon compte", copiez et collez l'URL ci-dessous dans votre navigateur Web :<br>

{{route('account.activate', $token)}}
@endcomponent
