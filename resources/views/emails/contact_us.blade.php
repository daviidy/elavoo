@component('mail::message')
# Contact

<b>Nom Complet :</b> {{$nom_complet}}

<b>Email :</b> {{$email}}

<b>Contact :</b> {{$contact}}

<b>Message :</b>
<br>
@php
    echo <<<EOF
    $message
EOF;
@endphp

<br>
Merci,<br>
{{ config('app.name') }}
@endcomponent
