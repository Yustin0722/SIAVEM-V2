@component('mail::message')
# Aviso RTV

 Señor (a)  {{$email}},

{{$messages}}


Thanks,<br>
{{ config('app.name') }}
@endcomponent