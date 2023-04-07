@component('mail::message')
# Aviso RTV

 Señor (a) {{$email}},

{{$messages}}


Muchas gracias,<br>
{{ config('app.name') }}
@endcomponent