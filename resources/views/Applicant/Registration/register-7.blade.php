@extends('Layout.quinary')

@section('title', 'Currículo Finalizado')

@section('content')

<!--------- Hero area start --------->
<section class="hero__area cadetro-hero pt-5 pb-5 mb-5">
    <div class="container position-relative">
        <div class="row ">
            <div class="col-md-5">
                <div class="cadestro__content__wrap">
                    <h4>Parabéns!
                    </h4>
                    <p>Estamos torcendo por você e te manteremos informado sobre novidades.</p>
                    <div class="hero__progress">
                        <div class="progress__top">
                            <p>Progresso</p>
                            <h5>100%</h5>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="hero__form__right">
                    <h4> Seu currículo já está aparecendo nas buscas.</h4>
                    <p class="text-md">Para aumentar suas chances lembre-se de preencher o máximo de informações
                        possíveis.</p>
                    <div class="view__resume__btn">
                        <a href="" class="btn-gray">Visualizar Currículo</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form__button d-flex justify-content-between pt-5 mt-3">
                    <a href="" class="return__btn">Voltar</a>
                    <button type="submit"> FINALIZAR E SAIR</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->
@endsection
