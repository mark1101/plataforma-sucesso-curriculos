@extends('Layout.quinary')

@section('title', 'Adicione uma foto ao seu perfil')

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
                            <h5>52%</h5>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 52%;" aria-valuenow="52"
                                 aria-valuemin="0" aria-valuemax="100"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="hero__form__right">
                    <h4> foto de perfil</h4>
                    <form action="">
                        <div class="form__card">
                            <div class="user__image__upload__wrapper">
                                <div class="user__image__upload__left">
                                    <div class="user__image__up__btns d-flex">
                                        <div class="add-experience">
                                            <button><span><i class="far fa-plus"></i></span> adicionar
                                                experiência</button>
                                        </div><button class="btn-gray">Enviar</button>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="user__image">
                                    <img src="assets/img/user-image.png" alt="">
                                </div>
                            </div>
                        </div>
                        <h4> Considerações adicionais</h4>
                        <div class="additional__form__wrapper">
                            <div class="single__input__item">
                                <textarea name="" id="" class="form-control"></textarea>
                            </div>
                            <div class="additional__checkboxes">
                                <label for="">Como conheceu nosso site?</label>
                                <div class="row">
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Indicação
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Rádio
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Televisão
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault4">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Google
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault5">
                                            <label class="form-check-label" for="flexRadioDefault5">
                                                Youtube
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault6">
                                            <label class="form-check-label" for="flexRadioDefault6">
                                                Facebook
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault7">
                                            <label class="form-check-label" for="flexRadioDefault7">
                                                Instagram
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="findCheckbox"
                                                   id="flexRadioDefault8">
                                            <label class="form-check-label" for="flexRadioDefault8">
                                                Outros
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="form__button d-flex justify-content-between pt-5">
                    <a href="" class="return__btn">Voltar</a>
                    <button type="submit">Salvar e próximo</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------- Hero area end --------->
@endsection
