@component('mail::message')
# Aviso de Expiração do plano

Faltam poucos dias para seu currículo expirar em nossa plataforma

@component('mail::button', ['url' => ''])
Renovar plano
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
