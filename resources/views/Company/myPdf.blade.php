<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucesso Empregos - Currículo {{ $data['name'] }}</title>
</head>

<style>
    * {
        font-family: 'Nunito', sans-serif;
    }

</style>

<body>
    <h2 align="center">Currículo - {{ $data['name'] }} </h2>
    <hr>
    <div class="row">
        <div class="col-sm">
            @if ($data['curriculum_photo_url'] != null)
                <img width="20%" src="images/feed/{{ $data['curriculum_photo_url'] }}" alt="" />
            @endif
        </div>
        <div class="col-sm">
            <p>Nome Completo: {{ $data['name'] }}</p>
            <p>Email: {{ $data['email'] }}</p>
            <p>Endereço: {{ $data['address'] }}</p>
            <p>CEP: {{ $data['cep'] }}</p>
            <p>Cidade: {{ $data['city'] }}-{{ $data['state'] }}</p>
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
            <p>Pretenção Salarial: R$ {{ number_format($data['desired_salary'], 2) }}</p>
            <p>Pessoa com Deficiência: {{ $data['is_handicapped'] }}</p>
            <p>CNH: {{ $data['cnh'] }}</p>
        </div>
    </div>

    <div class="row">
        @foreach ($experiences as $item)
            <div class="col">
                <h3>Experiências Profissionais</h3>
                <p>Nome da Empresa: {{ $item['name_company'] }}</p>
                <p>Ramo da Empresa: {{ $item['company_field'] }}</p>
                <p>Cargo Ocupado: {{ $item['occupied_job'] }}</p>
                <p>Anos: {{ $item['years'] }}</p>
                <p>Meses: {{ $item['months'] }}</p>
            </div>
        @endforeach
    </div>

    <div class="row">
        @foreach ($courses as $value)
            <div class="col">
                <h3>Cursos Extracurriculares</h3>
                <p>Nome do Curso: {{ $value['name_courses'] }}</p>
                <p>Instituição ou Escola: {{ $value['school'] }}</p>
                <p>Carga Horária: {{ $value['hours'] }}</p>
            </div>
        @endforeach
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
