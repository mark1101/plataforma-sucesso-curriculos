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
    <link rel="shortcut icon" type="imagex/png" href="/img/icone-aba.png">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <title>Planos Empresa</title>
</head>

<body style="background-color: #F2F2F2;">
    <!--------- Offcanvas area start --------->
    <div class="offcanvas-area">
        <div class="menu-close">
            <i class="far fa-times"></i>
        </div>
        <div class="offcanvas-menu">
            <div class="main-menu">
                <ul class="d-block">
                    <li><a href="{{ url('empresa/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('sugestao/cadastro') }}">Sugestões</a></li>
                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                    <li><a href="{{ url('suporte/cadastro') }}">Suporte</a></li>
                    <!-- <li><a href=""><span><img src="{{ asset('img/cart-btn.png') }}" alt=""></span></a></li> -->
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
                <a href="/empresa/dashboard"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
            </div>
            <div class="header__right">
                <div class="main__menu red--links">
                    <ul>
                        <li><a href="{{ url('empresa/dashboard') }}">Dashboard</a></li>
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


    <div>
        <div class="container">
            <div class="col card">
                <div class="card-header">
                    Compras Realizadas
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nome do Plano</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Status</th>
                                <th scope="col">Data de Compra</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $p)
                                <tr>
                                    <td>{{ $p->product }}</td>
                                    <td>R$ {{ $p->price }}</td>
                                    <td>{{ $p->status }}</td>
                                    <td>{{ \Carbon\Carbon::parse($p->created_at)->format('d/m/Y') }}</td>
                                    @if ($p->nfs != null)
                                        <td><a href="{{ url('api/nfs/create', ['payment' => $p->id]) }}">Ver nota</a>
                                        </td>
                                    @else
                                        <td><a href="{{ url('api/nfs/create', ['payment' => $p->id]) }}">Gerar
                                                Nota</a></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                           opa
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
