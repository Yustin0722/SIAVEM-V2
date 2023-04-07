@component('mail::message')
# Aviso RTV

 Señor (a)  {{$email}},

{{$messages}}


Gracias,<br>
{{ config('app.name') }}
@endcomponent