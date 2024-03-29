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
    <!--------- Header area end --------->
    <div class="container position-relative">
        <div class="row">
            <div class="col-md-12">
                <div class="pricing__wrapper bg-transparent">
                    <div class="row g-5">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card pricing--card--big">
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>Pacote</p>
                                        <h5>gratuito</h5>
                                    </div>
                                    <hr />
                                    <div class="text">
                                        Baixe apenas currículos de candidatos <br />
                                        <b>sem experiência</b>
                                    </div>
                                    <div class="pricing__card__price">
                                        <h3>
                                            100% <br />
                                            grátis
                                        </h3>
                                    </div>
                                    <hr />
                                    <div class="validity__text">30 currículos</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card card-red pricing--card--big">
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>Pacote</p>
                                        <h5>básico</h5>
                                    </div>
                                    <hr />
                                    <div class="text">
                                        Baixe currículos de candidatos
                                        <b class="text-red">qualificados</b>
                                        <b>e com experiência</b>
                                    </div>
                                    <div class="pricing__card__price">
                                        <span>R$<b>69</b>,90</span>
                                        <div class="discount--text">r$6,99 por currículo</div>
                                    </div>
                                    <hr />
                                    <div class="validity__text">10 currículos</div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href="{{ url('/carrinho-empresa', ['id' => 2]) }}"
                                        style="cursor: pointer; color: white"> Adquirir agora</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card card-red pricing--card--big">
                                <div class="discount-badge">
                                    <img src="img/discount-badge.png" alt="" />
                                </div>
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>Pacote</p>
                                        <h5>premium</h5>
                                    </div>
                                    <hr />
                                    <div class="text">
                                        Baixe currículos de candidatos
                                        <b class="text-red">qualificados</b>
                                        <b>e com experiência</b>
                                    </div>
                                    <div class="pricing__card__price">
                                        <span>R$<b>99</b>,90</span>
                                        <div class="discount--text">r$3,30 por currículo</div>
                                    </div>
                                    <hr />
                                    <div class="validity__text">30 currículos</div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href="{{ url('/carrinho-empresa', ['id' => 3]) }}"
                                        style="cursor: pointer; color: white"> Adquirir agora</a>
                                </div>
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

</body>

</html>
