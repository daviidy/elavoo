@component('mail::message')
# Bonjour

Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation du mot de passe de votre compte.

@component('mail::button', ['url' => route('password.showResetForm', $token)])
Réinitialiser mon mot de passe
@endcomponent

Ce lien de réinitialisation du mot de passe expirera dans 60 minutes.<br>

Si vous n'avez pas demandé de réinitialisation du mot de passe, aucune action supplémentaire n'est requise.<br>

Remerciements,<br>
{{ config('app.name') }}

<hr>
Si vous avez des difficultés à cliquer sur le bouton "Réinitialiser mon mot de passe", copiez et collez l'URL ci-dessous dans votre navigateur Web :<br>

{{route('password.showResetForm', $token)}}
@endcomponent
