@component('mail::message')

@component('mail::panel')
<b>Од:</b> {{$name}}, {{$email}}
@endcomponent

@component('mail::panel')
<b>Порака:</b> <br>{{$body}}
@endcomponent

@endcomponent
