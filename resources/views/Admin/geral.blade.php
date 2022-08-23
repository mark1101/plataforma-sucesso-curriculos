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
    <link rel="shortcut icon" type="imagex/png" href="/img/logo-white.png"> <!-- href="/img/icone-aba.png" -->

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
                    <li><a href="#">Plataforma de Gerenciamento</a></li>
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
                        <li><a href="#">Plataforma de Gerenciamento</a></li>
                    </ul>
                </div>
                <div class="menu-open">
                    <i class="far fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Candidatos Cadastrados </h5>
                            <h2>{{ $candidate }}</h2>
                            <a href="#" class="btn btn-primary">Ver candidatos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Empresas Cadastradas</h5>
                            <h2>{{ $company }}</h2>
                            <a href="#" class="btn btn-primary">Ver Empresas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Curriculos Cadastrados</h5>
                            <h2>{{ $curriculum }}</h2>
                            <a href="#" class="btn btn-primary">Ver Currículos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Planos de Candidatos</h5>
                            <h2>{{ $plansCandidade }}</h2>
                            <a href="#" class="btn btn-primary">Ver Planos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Planos de Empresa</h5>
                            <h2>{{ $plansCompany }}</h2>
                            <a href="#" class="btn btn-primary">Ver Planos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-4">
            <div class="card p-5">
                <div class="col-sm-12">
                    <h3>Dados de empresa - Relacionamento de Cadastro de Empresa</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome Empresa</th>
                                <th scope="col">CNPJ</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Entrada na Plataforma</th>
                                <th scope="col">Curriculos Baixados</th>
                                <th scope="col">Créditos</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tableCompany as $tc)
                                <tr>
                                    <th scope="row">{{ $tc->name }}</th>
                                    <td>{{ $tc->cnpj }}</td>
                                    <td>{{ $tc->address }}</td>
                                    <td>{{ $tc->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $tc->curriculumDownload->count() }}</td>
                                    <td>{{ $tc->quantity->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 mb-4">
            <div class="card p-5">
                <div class="col-sm-12">
                    <h3>Dados de candidatos - Relacionamento de Cadastro de Candidatos</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nome Candidato</th>
                                <th scope="col">Email</th>
                                <th scope="col">Curriculo</th>
                                <th scope="col">Entrada na Plataforma</th>
                                <th scope="col">Plano Atual</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tableCandidate as $tcan)
                                <tr>
                                    <th scope="row">{{ $tcan->name }}</th>
                                    <td>{{ $tcan->user->email }}</td>
                                    @if ($tcan->curriculum->count() > 0)
                                        <td>Ativo</td>
                                    @else
                                        <td>Inativo</td>
                                    @endif
                                    <td>{{ $tcan->created_at->format('d/m/Y') }}</td>
                                    @if ($tcan->planCandidate->plan->name)
                                        <td>{{ $tcan->planCandidate->plan->name }}</td>
                                    @else
                                        <td>Sem plano</td>
                                    @endif

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
