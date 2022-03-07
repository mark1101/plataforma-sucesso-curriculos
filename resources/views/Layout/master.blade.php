<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

     <title>@yield('title')</title>
</head>

<body>

<!--------- Offcanvas area start MOBILE--------->
<div class="offcanvas-area">
    <div class="menu-close">
        <i class="far fa-times"></i>
    </div>
    <div class="offcanvas-menu">
        <div class="main-menu">
            <ul class="d-block">
                <li><a href="{{url('candidato/entrar')}}">Sou Candidato</a></li>
                <li><a href="{{url('empresa/login')}}">Sou Empresa</a></li>
                <li><a href="{{url('sugestao/cadastro')}}">Sugestões</a></li>
                <li><a href="{{url('faq')}}">FAQ</a></li>
                <li><a href="{{url('suporte/cadastro')}}">Suporte</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<!--------- Offcanvas area end --------->


<!--------- Header area start WEB--------->
<header class="header__area">
    <div class="container">
        <div class="logo__main">
            <a href="/"><img src="{{asset('img/logo-main.png')}}" alt=""></a>
        </div>
        <div class="header__right">
            <div class="main__menu">
                <ul>
                    <li><a href="{{url('candidato/entrar')}}">Sou Candidato</a></li>
                    <li><a href="{{url('empresa/login')}}">Sou Empresa</a></li>
                    <li><a href="{{url('sugestao/cadastro')}}">Sugestões</a></li>
                    <li><a href="{{url('faq')}}">FAQ</a></li>
                    <li><a href="{{url('suporte/cadastro')}}">Suporte</a></li>
                </ul>
            </div>
            <div class="menu-open">
                <i class="far fa-bars"></i>
            </div>
        </div>
    </div>
</header>
<!--------- Header area end --------->

@yield('content')

<!--------- Footer area start --------->
<footer class="footer__area">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <a href="/"><img src="{{asset('img/footer-logo.png')}}" alt=""></a>
            </div>
            <p>Sucesso Empregos 2022 © Copyright. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
<!--------- Footer area end --------->


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>

</script>


</body>

</html>
