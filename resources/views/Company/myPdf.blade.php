<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sucesso Empregos - Currículo {{$data['name']}}</title>
</head>

<body>

<h2 align="center">Sucesso Empregos - Currículo</h2>
<hr>
<div class="row">
    <div class="col-sm">
        <img src="img/user-image.png" alt=""/>
    </div>
    <div class="col-sm">
        <p>Nome Completo: {{$data['name']}}</p>
        <p>Email: {{$data['email']}}</p>
        <p>Endereço: {{$data['address']}}</p>
        <p>CEP: {{$data['cep']}}</p>
        <p>Cidade: {{$data['city']}}-{{$data['state']}}</p>
        <p>Telefone: {{ $data['phone'] }}</p>
        <p>Whatsapp: {{ $data['whatsapp'] }}</p>
        <p>Gênero: {{ $data['gender'] }}</p>
        <p>Data de Nascimento: {{ $data['age'] }}</p>
    </div>
</div>
<div class="row">
    <div class="col">
        <h3>Informações Profissionais</h3>
        <p>Grau de Escolaridade: {{ $data['schooling_level'] }}</p>
        <p>Formação: {{ $data['formation'] }}</p>
        <p>Instituição de Ensino: {{ $data['institution'] }}</p>
        <p>Tipo de Contratação: {{ $data['hiring_type'] }}</p>
        <p>Função Desejada: {{ $data['desired_function'] }}</p>
        <p>Pretenção Salarial: {{ $data['desired_salary'] }}</p>
        <p>Pessoa com Deficiência: {{ $data['is_handicapped'] }}</p>
        <p>CNH: {{ $data['cnh'] }}</p>
    </div>
</div>

<div class="row">

</div>

<div class="row">
    <div class="col">
        <h3>Cursos Extracurriculares</h3>
        <p>Nome do Curso: {{ $data[''] }}</p>
        <p>Instituição ou Escola: {{ $data[''] }}</p>
        <p>Carga Horária: {{ $data[''] }}</p>
    </div>
</div>

<div class="row">
    <div class="col">
        <h3>Considerações Adicionais</h3>
        <p>{{ $data['additional_considerations'] }}</p>
    </div>
</div>

<div class="row">
    <div class="col">
        <h3>Atualmente Está</h3>
        <p>{{ $data['is_employed'] }}</p>
    </div>
</div>

</body>

</html>
