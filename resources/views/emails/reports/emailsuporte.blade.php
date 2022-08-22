<html>

<body>
    <p>
    <h2>Nome:</h2> {{ $support['name'] }}</p>
    <p>
    <h2>Email</h2> {{ $support['email'] }}</p>
    <p>
    <h2>Assunto</h2> {{ $support['subject'] }}</p>
    <p>
    <h2>Mensagem</h2> {{ $support['problem'] }}</p>
</body>

</html>

<style>
    h2 {
        color: #0950B9;
        font-weight: 700;
        font-family: 'Montserrat', sans-serif;
        size: 50px;
    }
</style>