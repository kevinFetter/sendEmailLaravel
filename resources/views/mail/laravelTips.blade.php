@component('mail::message')
<h1>Primeiro Email</h1>
@component('mail::button', ['url' => 'http://localhost/projectLaravel/ep14/public/envio-email'])
    Garantir Vaga !    
@endcomponent
<p>Email com Laravel com usuário piloto: <strong>{{$user->name }}</strong>, Obrigado pelos testes.</p>    
@endcomponent
