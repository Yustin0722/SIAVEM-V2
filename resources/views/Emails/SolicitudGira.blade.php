@component('mail::message')
# Confirmacion de solicitud de gira

Señor (a)  {{$email}},

{{$messages}}
@component('mail::button', ['url' => "$newLink"])
CAMBIAR ESTADO A APROBADO O RECHAZADO
@endcomponent

Muchas gracias,<br>
{{ config('app.name') }}
@endcomponent