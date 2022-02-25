@extends('Layout.secundary')

@section('title', 'Planos')

@section('content')

<!--------- Hero area start --------->
<section class="hero__area cadetro-hero pb-5 mb-5">
    <div class="hero-shape-2">
        <img src="{{asset('img/shapes/shape-2.png')}}" alt="">
    </div>
    <div class="container position-relative">
        <div class="row ">
            <div class="col-md-12">
                <div class="pricing__wrapper bg-transparent">
                    <div class="row g-5">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card pricing--card--big">
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>Pacote </p>
                                        <h5>gratuito</h5>
                                    </div>
                                    <hr>
                                    <div class="text">Baixe apenas currículos de candidatos <br>
                                        <b>sem experiência</b>
                                    </div>
                                    <div class="pricing__card__price">
                                        <h3>100% <br>
                                            grátis</h3>
                                    </div>
                                    <hr>
                                    <div class="validity__text">
                                        30 currículos
                                    </div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href=""> compre agora</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card card-red pricing--card--big">
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>Pacote
                                        </p>
                                        <h5>básico</h5>
                                    </div>
                                    <hr>
                                    <div class="text">
                                        Baixe currículos de candidatos <b class="text-red">qualificados</b>
                                        <b>e com experiência</b>
                                    </div>
                                    <div class="pricing__card__price">
                                        <span>R$<b>69</b>,90</span>
                                        <div class="discount--text">r$6,99 por currículo</div>
                                    </div>
                                    <hr>
                                    <div class="validity__text">
                                        10 currículos
                                    </div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href=""> compre agora</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card card-red pricing--card--big">
                                <div class="discount-badge">
                                    <img src="{{asset('img/discount-badge.png')}}" alt="">
                                </div>
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>Pacote
                                        </p>
                                        <h5>premium</h5>
                                    </div>
                                    <hr>
                                    <div class="text">
                                        Baixe currículos de candidatos <b class="text-red">qualificados</b>
                                        <b>e com experiência</b>
                                    </div>
                                    <div class="pricing__card__price">
                                        <span>R$<b>99</b>,90</span>
                                        <div class="discount--text">r$3,30 por currículo</div>
                                    </div>
                                    <hr>
                                    <div class="validity__text">
                                        30 currículos
                                    </div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href=""> compre agora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->

@endsection
