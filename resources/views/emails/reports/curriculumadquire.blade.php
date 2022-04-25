@component('mail::message')
# Sucesso Empregos

Parabéns {{ $name }}, você acabou de adicionar alguns currículos a sua dashboard

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
