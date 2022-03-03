@extends('Layout.quinary')

@section('title', 'Informações Profissionais')

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
                            <h5>17%</h5>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 17%;" aria-valuenow="17"
                                 aria-valuemin="0" aria-valuemax="100"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="hero__form__right">
                    <h4>informações Profissionais</h4>
                    <form action="">
                        <div class="single__input__item d-flex align-items-center">
                            <label for="">Grau de Escolaridade</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="single__input__item d-flex align-items-center">
                            <label for=""> Formação</label>
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="single__input__item d-flex align-items-center">
                            <label for=""> Instituição de Ensino</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="single__input__item d-flex align-items-center">
                            <label for="">Tipo de Contratação</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="single__input__item d-flex align-items-center">
                            <label for=""> Função desejada</label>
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="single__input__item d-flex align-items-center">
                            <label for="">Pretensão Salarial</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="single__input__item d-flex align-items-center">
                            <label for="">Pessoa com Deficiência (PcD)?</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="single__input__item d-flex align-items-center">
                            <label for="">Carteira Nacional de Habilitação (CNH)</label>
                            <div class="row">
                                <div class="col-md-5">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="form__button d-flex justify-content-between pt-3">
                    <a href="" class="return__btn">Voltar</a>
                    <button type="submit">Salvar e próximo</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->
@endsection
