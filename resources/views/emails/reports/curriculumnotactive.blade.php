@component('mail::message')
# Seu currículo está inativo :(

Seu currículo está inativo para pesquisas, volte agora a renovar seu plano 
para ficar mais próximo do seu sonho!

@component('mail::button', ['url' => ''])
Renovar agora! 
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
