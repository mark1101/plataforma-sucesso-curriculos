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

    <title>Precisa de ajuda?</title>
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
                <li><a href="">Sou Candidato</a></li>
                <li><a href="">Sou Empresa</a></li>
                <li><a href="">Sugestões</a></li>
                <li><a href="{{url('faq')}}">FAQ</a></li>
                <li><a href="{{url('suporte')}}">Suporte</a></li>
                <li><a href=""><span><img src="assets/img/cart-btn.png" alt=""></span></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<!--------- Offcanvas area end --------->


<!--------- Header area start --------->
<header class="header__area support--header">
    <div class="container">
        <div class="logo__main">
            <a href=""><img src="{{asset('img/logo.svg')}}" alt=""></a>
        </div>
        <div class="header__right">
            <div class="main__menu">
                <ul>
                    <li class="red--links"><a href="">Sou Candidato</a></li>
                    <li class="red--links"><a href="">Sou Empresa</a></li>
                    <li><a href="">Sugestões</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Suporte</a></li>
                    <li><a href=""><span><img src="{{asset('img/cart-btn.png')}}" alt=""></span></a></li>
                </ul>
            </div>
            <div class="menu-open">
                <i class="far fa-bars"></i>
            </div>
        </div>
    </div>
</header>
<!--------- Header area end --------->


<!--------- Hero area start --------->
<section class="hero__area support-hero ">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-lg-6 col-md-6">
                <div class="support__content__wrapper">
                    <h4>Está com dúvidas ou problemas?
                        A gente te ajuda!</h4>
                    <div class="evalutaion__content__wrapper text-start support-content-wrapper">
                        <div class="single__input__item">
                            <label for="">Nome Completo</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="single__input__item">
                            <label for=""> E-mail </label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="single__input__item">
                            <label for=""> Assunto </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="single__input__item">
                            <label for="">Mensagem</label>
                            <textarea name="" id="" class="form-control"></textarea>
                        </div>
                        <div class="evaluation__content__bottom__btns">
                            <button type="button" class="bg-red"> Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="support__thumb">
                    <img src="{{asset('img/support-thumb.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->






<!--------- Footer area start --------->
<footer class="footer__area">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__logo">
                <a href=""><img src="{{asset('img/footer-logo.png')}}" alt=""></a>
            </div>
            <p>Sucesso Empregos 2021 © Copyright. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
<!--------- Footer area end --------->















<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.nice-number.js"></script>
<script src="assets/js/main.js"></script>
<script>

</script>


</body>

</html>
