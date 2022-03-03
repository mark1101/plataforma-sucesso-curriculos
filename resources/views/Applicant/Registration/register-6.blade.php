@extends('Layout.quinary')

@section('title', 'Escolha o Plano')

@section('content')

<!--------- Hero area start --------->
<section class="hero__area cadetro-hero pt-5 pb-5 mb-5">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-md-4">
                <div class="cadestro__content__wrap">
                    <h4>Escolha o
                        plano ideal
                        para você </h4>
                    <p>Escolha o plano mais adequado a sua necessidade e boa sorte na sua jornada!</p>
                    <div class="hero__progress">
                        <div class="progress__top">
                            <p>Progresso</p>
                            <h5>86%</h5>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 86%;" aria-valuenow="86"
                                 aria-valuemin="0" aria-valuemax="100"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="pricing__wrapper">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card">
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>plano </p>
                                        <h5>Mensal</h5>
                                    </div>
                                    <hr>
                                    <div class="pricing__card__price">
                                        <div class="rate--count">1x</div>
                                        <span>R$<b>15</b>,90</span>
                                    </div>
                                    <div class="p">ou seja <b> R$0,53/dia</b></div>
                                    <hr>
                                    <div class="validity__text">
                                        Vigência de 30 dias
                                    </div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href="">Escolher Plano</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card card-sky-blue">
                                <div class="pricing__card__body">
                                    <div class="b-1">
                                        <img src="assets/img/b-1.svg" alt="">
                                    </div>
                                    <div class="pricing__card__title">
                                        <p>plano </p>
                                        <h5>Trimestral</h5>
                                    </div>
                                    <hr>
                                    <div class="pricing__card__price">
                                        <div class="rate--count">3x</div>
                                        <span>R$<b>12</b>,90</span>
                                    </div>
                                    <div class="p">ou seja <b> R$0,43/dia</b></div>
                                    <hr>
                                    <div class="validity__text">
                                        Vigência de 90 dias
                                    </div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href="">Escolher Plano</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing__single__card card-sky">
                                <div class="b-1">
                                    <img src="assets/img/b-2.svg" alt="">
                                </div>
                                <div class="pricing__card__body">
                                    <div class="pricing__card__title">
                                        <p>plano </p>
                                        <h5>semestral</h5>
                                    </div>
                                    <hr>
                                    <div class="pricing__card__price">
                                        <div class="rate--count">1x</div>
                                        <span>R$<b>9</b>,90</span>
                                    </div>
                                    <div class="p">ou seja <b> R$0,33/dia</b></div>
                                    <hr>
                                    <div class="validity__text">
                                        Vigência de 180 dias
                                    </div>
                                </div>
                                <div class="pricing__card__bottom">
                                    <a href="">Escolher Plano</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form__button d-flex justify-content-between pt-5 mt-3">
                    <a href="" class="return__btn">Voltar</a>
                    <button type="submit"> Salvar e próximo</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->
@endsection
