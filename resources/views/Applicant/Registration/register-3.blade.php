@extends('Layout.quinary')

@section('title', 'Experiências Profissionais')

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
                            <h5>35%</h5>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="17"
                                 aria-valuemin="0" aria-valuemax="100"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="hero__form__right">
                    <h4> Experiências profissionais</h4>
                    <form action="">
                        <div class="form__card">
                            <div class="card-body">
                                <div class="single__input__item d-flex align-items-center">
                                    <label for="">Nome da Empresa</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="single__input__item d-flex align-items-center">
                                    <label for=""> Ramo da Empresa </label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="single__input__item d-flex align-items-center">
                                    <label for="">Cargo Ocupado</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="single__input__item d-flex align-items-center">
                                    <label for=""> Período</label>
                                    <div class="nice__numbers__wrapper">
                                        <input type="number">
                                        <label for="">Anos e</label>
                                    </div>
                                    <div class="nice__numbers__wrapper">
                                        <input type="number">
                                        <label for=""> Meses.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="add-experience">
                                <button><span><i class="far fa-plus"></i></span> adicionar experiência</button>
                            </div>
                        </div>
                        <h4> Cursos extracurriculares</h4>
                        <div class="form__card">
                            <div class="card-body">
                                <div class="single__input__item d-flex align-items-center">
                                    <label for=""> Nome do Curso</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="single__input__item d-flex align-items-center">
                                    <label for=""> Instituição ou Escola</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="single__input__item d-flex align-items-center">
                                    <label for=""> Carga Horária</label>
                                    <div class="nice__numbers__wrapper">
                                        <input type="number">
                                        <label for=""> Horas</label>
                                    </div>
                                </div>
                            </div>
                            <div class="add-experience">
                                <button><span><i class="far fa-plus"></i></span> adicionar CURSO</button>
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
