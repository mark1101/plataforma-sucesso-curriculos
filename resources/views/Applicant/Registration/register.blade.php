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

    <title>Registre Suas Informações Pessoais</title>
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
                <li><a href="">Sou Candidato</a></li>
                <li><a href="">Sou Empresa</a></li>
                <li><a href="">Sugestões</a></li>
                <li><a href="">FAQ</a></li>
                <li><a href="">Suporte</a></li>
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
            <a href=""><img src="assets/img/logo-main.png" alt=""></a>
        </div>
        <div class="header__right">
            <div class="main__menu blue--links">
                <ul>
                    <li><a href="">Sou Candidato</a></li>
                    <li><a href="">Sou Empresa</a></li>
                    <li><a href="">Sugestões</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Suporte</a></li>
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
<section class="hero__area cadetro-hero pt-5 pb-5 mb-5">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-md-5">
                <div class="cadestro__content__wrap">
                    <h4>O seu futuro <br>
                        começa aqui!
                    </h4>
                    <p>É só preencher seus dados para você garantir sua vaga dos sonhos!</p>
                    <div class="hero__progress">
                        <div class="progress__top">
                            <p>Progresso</p>
                            <h5>0%</h5>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                                 aria-valuemin="0" aria-valuemax="100"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="hero__form__right">
                    <h4>informações pessoais e de contato</h4>
                    <form action="">
                        <div class="row gx-3">
                            <div class="col-12">
                                <div class="single__input__item">
                                    <label for="">Nome Completo</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single__input__item">
                                    <label for=""> Rua</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="single__input__item">
                                    <label for=""> Nº</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single__input__item">
                                    <label for=""> Complemento</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single__input__item">
                                    <label for=""> CEP</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single__input__item">
                                    <label for=""> Estado</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single__input__item">
                                    <label for=""> Cidade</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single__input__item">
                                    <label for=""> Telefone</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single__input__item">
                                    <label for=""> WhatsApp</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="single__input__item">
                                    <label for=""> E-mail </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single__input__item">
                                    <label for=""> Gênero</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single__input__item">
                                    <label for=""> Data de Nascimento</label>
                                    <div class="row gx-3">
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form__button d-flex justify-content-end pt-3">
                                    <button type="submit">Salvar e próximo</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                <a href=""><img src="assets/img/footer-logo.png" alt=""></a>
            </div>
            <p>Sucesso Empregos 2021 © Copyright. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
<!--------- Footer area end --------->















<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>
<script>

</script>


</body>

</html>
