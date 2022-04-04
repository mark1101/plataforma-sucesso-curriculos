<!DOCTYPE html>
<html>

<head>
    <title>Sucesso Empregos Currículos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <div class="row mt-3 mb-2">
        <div class="col-sm-4">
            <img src="img/user-image.png" alt="" />
        </div>
    </div>

    <h2>{{ $curriculum->name }}</h2>

    <label>Considerações Adicionais</label>
    <p>{{ $curriculum->additional_considerations }}</p>

    <div class="row">
        <div class="col">
            <h3>Informações de contato</h3>
            <label>Email</label>
            <p>{{ $curriculum->email }}</p>
        </div>
    </div>

</body>

</html>
