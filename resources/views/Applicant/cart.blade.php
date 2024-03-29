<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="/img/logo-white.png"> <!-- href="/img/icone-aba.png" -->

    <title>@yield('title')</title>
</head>

<?php
// SDK do Mercado Pago
require base_path('vendor/autoload.php');

MercadoPago\SDK::setAccessToken(config('app.mp_acess_token'));

$preference = new MercadoPago\Preference();

$item = new MercadoPago\Item();
$item->title = $plan->name;
$item->quantity = 1;
$item->unit_price = $plan->price;

$preference->items = [$item];

$preference->back_urls = [
    'success' => route('init'),
    'failure' => route('init'),
    'pending' => route('init'),
];
$preference->auto_return = 'all';
$preference->notification_url = 'https://sucessoempregos.com/api/webook/mp?user='.$user.'&value='.$plan->price.'&product='.$product;
$preference->save();
?>

<body>
    <!--------- Offcanvas area start --------->
    <div class="offcanvas-area">
        <div class="menu-close">
            <i class="far fa-times"></i>
        </div>
        <div class="offcanvas-menu">
            <div class="main-menu">
                <ul class="d-block">
                    <li><a href="{{ url('candidato/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('sugestao/cadastro') }}">Sugestões</a></li>
                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                </ul>
                </ul>
            </div>
        </div>
    </div>

    <div class="offcanvas-overlay"></div>
    <!--------- Offcanvas area end --------->


    <!--------- Header area start --------->
    <header class="header__area position-relative">
        <div class="container">
            <div class="logo__main">
                <a href="/candidato/dashboard"><img src="{{ asset('img/logo-main.png') }}" alt=""></a>
            </div>
            <div class="header__right">
                <div class="main__menu blue--links">
                    <ul>
                        <li><a href="{{ url('candidato/dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ url('sugestao/cadastro') }}">Sugestões</a></li>
                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                        <li><a href="{{ url('suporte/cadastro') }}">Suporte</a></li>
                    </ul>
                </div>
                <div class="menu-open">
                    <i class="far fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!--------- Header area end --------->
    <div>
        <div class="container">
            <div class="col card">
                <div class="card-header">
                    Carrinho
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome do Produto</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Dias</th>
                                <th scope="col">Recorrência</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $plan->name }}</td>
                                <td>R$ {{ $plan->price }}</td>
                                <td>{{ $plan->days }}</td>
                                <td>{{ $plan->recurrence }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer" style="text-align: right;">
                    <div class="row">
                        <h3>Total: R$ {{ $plan->price }}</h3>
                    </div>
                    <div class="cho-container">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago("{{ config('app.mp_public_key') }}", {
            locale: 'pt-BR'
        });

        // Inicialize o checkout
        mp.checkout({
            preference: {
                id: '{{ $preference->id }}'
            },
            render: {
                container: '.cho-container', // Indique o nome da class onde será exibido o botão de pagamento
                label: 'Ir para pagamento', // Muda o texto do botão de pagamento (opcional)
            }
        });
    </script>

</body>

</html>
