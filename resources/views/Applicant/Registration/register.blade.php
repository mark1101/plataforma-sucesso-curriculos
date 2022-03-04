@extends('Layout.quinary')

@section('title', 'Registre Suas Informações Pessoais')

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

@endsection
