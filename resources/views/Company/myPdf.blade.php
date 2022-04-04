<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sucesso Empregos Currículos</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>

    <div class="row mt-3 mb-2">
        <div class="col-sm-4">
            <img src="img/user-image.png" alt="" />
        </div>
    </div>
    <h2>{{ $data->name}}</h2>

    <label>Considerações Adicionais</label>
    <p>{{ $data->additional_considerations }}</p>

    <div class="row">
        <div class="col">
            <h3>Informações de contato</h3>
            <label>Email</label>
            <p>{{ $data->email }}</p>
        </div>
    </div>


</body>

</html>
