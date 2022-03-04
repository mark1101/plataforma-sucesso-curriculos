@extends('Layout.quinary')

@section('title', 'Privacidade do Currículo')

@section('content')

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
                            <h5>69%</h5>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 69%;" aria-valuenow="69"
                                 aria-valuemin="0" aria-valuemax="100"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="hero__form__right">
                    <h4> VOCÊ ESTÁ EMPREGADO OU DESEMPREGADO?</h4>
                    <form action="">
                        <div class="form__card">
                            <div class="single__input__item employed-flex d-flex align-items-center">
                                <label for=""> Atualmente estou:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employmentCheckbox"
                                           id="flexRadioDefault9">
                                    <label class="form-check-label" for="flexRadioDefault9">
                                        Desempregado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employmentCheckbox"
                                           id="flexRadioDefault10">
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        Empregado
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Não mostre meu currículo para meu atual empregador.
                                    </label>
                                </div>
                                <div class="help__blk">
                                    <span><img src="assets/img/help.png" alt=""></span>
                                    <p>Evite constrangimentos na hora de procurar um novo emprego. Com essa função
                                        seu currículo será ocultado do seu atual empregador.
                                        <b>Esta função possui um custo adicional de R$6,50/mês.</b>
                                    </p>
                                </div>
                                <div class="single__input__item d-flex align-items-center">
                                    <label for=""> CNPJ do Empregador</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="form__button d-flex justify-content-between pt-5 mt-3">
                    <a href="" class="return__btn">Voltar</a>
                    <button type="submit">Salvar e próximo</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->
@endsection
