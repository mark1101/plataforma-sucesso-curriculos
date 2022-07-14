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
    <link rel="shortcut icon" type="imagex/png" href="/img/icone-aba.png">

    <title>Sucesso Empregos - Planos Candidato</title>
</head>

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
            <div class="pb-5 pt-5">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing__single__card">
                            <div class="pricing__card__body">
                                <div class="pricing__card__title">
                                    <p>plano</p>
                                    <h5>Mensal</h5>
                                </div>
                                <hr />
                                <div class="pricing__card__price">
                                    <div class="rate--count">1x</div>
                                    <span>R$<b>15</b>,90</span>
                                </div>
                                <div class="p">ou seja <b> R$0,53/dia</b></div>
                                <hr />
                                <div class="validity__text">Vigência de 30 dias</div>
                            </div>
                            <div class="pricing__card__bottom">
                                <a href="{{url('carrinho-candidado' , ['id' => 1])}}">Escolher Plano</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing__single__card card-sky-blue">
                            <div class="pricing__card__body">
                                <div class="b-1">
                                    <img src="img/b-1.svg" alt="" />
                                </div>
                                <div class="pricing__card__title">
                                    <p>plano</p>
                                    <h5>Trimestral</h5>
                                </div>
                                <hr />
                                <div class="pricing__card__price">
                                    <div class="rate--count">3x</div>
                                    <span>R$<b>12</b>,90</span>
                                </div>
                                <div class="p">ou seja <b> R$0,43/dia</b></div>
                                <hr />
                                <div class="validity__text">Vigência de 90 dias</div>
                            </div>
                            <div class="pricing__card__bottom">
                                <a href="{{url('carrinho-candidado' , ['id' => 2])}}">Escolher Plano</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing__single__card card-sky">
                            <div class="b-1">
                                <img src="img/b-2.svg" alt="" />
                            </div>
                            <div class="pricing__card__body">
                                <div class="pricing__card__title">
                                    <p>plano</p>
                                    <h5>semestral</h5>
                                </div>
                                <hr />
                                <div class="pricing__card__price">
                                    <div class="rate--count">1x</div>
                                    <span>R$<b>9</b>,90</span>
                                </div>
                                <div class="p">ou seja <b> R$0,33/dia</b></div>
                                <hr />
                                <div class="validity__text">Vigência de 180 dias</div>
                            </div>
                            <div class="pricing__card__bottom">
                                <a href="{{url('carrinho-candidado' , ['id' => 3])}}">Escolher Plano</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------- Footer area start --------->
    <footer class="footer__area">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__logo">
                    <a href="/"><img src="{{ asset('img/footer-logo.png') }}" alt=""></a>
                </div>
                <p>Sucesso Empregos 2022 © Copyright. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <!--------- Footer area end --------->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
