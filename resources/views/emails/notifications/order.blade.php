@component('mail::message')
# Command N° {{$numero_commande}}

{{$message}}

@component('mail::button', ['url' => url('bills', $bill_id).'?read='.$notif_id])
Voir la commande
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
