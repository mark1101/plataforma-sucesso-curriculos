<template>
    <div>
        <div class="tab" v-if="activePhase === 1">
            <section class="hero__area cadetro-hero pt-5 pb-5 ">
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
                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                             aria-valuenow="0"
                                             aria-valuemin="0" aria-valuemax="100"></div>
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
                                                <input type="text" class="form-control" v-model="name">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="single__input__item">
                                                <label for=""> Endereço</label>
                                                <input type="text" class="form-control" v-model="address" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> CEP</label>
                                                <input type="text" class="form-control" v-model="cep">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> Estado</label>
                                                <select class="form-select" aria-label="Default select example" v-model="state">
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
                                                <select class="form-select" aria-label="Default select example" v-model="city">
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
                                                <input type="text" class="form-control" v-model="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> WhatsApp</label>
                                                <input type="text" class="form-control" v-model="whatsapp">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="single__input__item">
                                                <label for=""> E-mail </label>
                                                <input type="text" class="form-control" v-model="email">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> Gênero</label>
                                                <select class="form-select" aria-label="Default select example" v-model="gender">
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
                                                <input type="text" class="form-control" v-model="age">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab" v-if="activePhase === 2">
            <section class="hero__area cadetro-hero pt-5 pb-5">
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
                                        <div class="progress-bar" role="progressbar" style="width: 17%;"
                                             aria-valuenow="17"
                                             aria-valuemin="0" aria-valuemax="100"></div>
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
                    </div>
                </div>
            </section>
        </div>

        <div class="tab" v-if="activePhase === 3">
            <section class="hero__area cadetro-hero pt-5 pb-5">
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
                                        <div class="progress-bar" role="progressbar" style="width: 35%;"
                                             aria-valuenow="17"
                                             aria-valuemin="0" aria-valuemax="100"></div>
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
                                            <button><span><i class="far fa-plus"></i></span> adicionar experiência
                                            </button>
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
                                            <button><span><i class="far fa-plus"></i></span> adicionar CURSO
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="tab" v-if="activePhase === 4">
            <section class="hero__area cadetro-hero pt-5 pb-5">
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
                                        <div class="progress-bar" role="progressbar" style="width: 52%;"
                                             aria-valuenow="52"
                                             aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <button class="btn-gray">Enviar Imagem</button>
                                                </div>
                                            </div>
                                            <div class="user__image">
                                                <img src="img/user-image.png" alt="">
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
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
                                                               id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Indicação
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
                                                               id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Rádio
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
                                                               id="flexRadioDefault3">
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            Televisão
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
                                                               id="flexRadioDefault4">
                                                        <label class="form-check-label" for="flexRadioDefault4">
                                                            Google
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
                                                               id="flexRadioDefault5">
                                                        <label class="form-check-label" for="flexRadioDefault5">
                                                            Youtube
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
                                                               id="flexRadioDefault6">
                                                        <label class="form-check-label" for="flexRadioDefault6">
                                                            Facebook
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
                                                               id="flexRadioDefault7">
                                                        <label class="form-check-label" for="flexRadioDefault7">
                                                            Instagram
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                               name="findCheckbox"
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
                    </div>
                </div>
            </section>
        </div>

        <div class="tab" v-if="activePhase === 5">
            <section class="hero__area cadetro-hero pt-5 pb-5">
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
                                        <div class="progress-bar" role="progressbar" style="width: 69%;"
                                             aria-valuenow="69"
                                             aria-valuemin="0" aria-valuemax="100"></div>
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
                                                <input class="form-check-input" type="radio"
                                                       name="employmentCheckbox"
                                                       id="flexRadioDefault9">
                                                <label class="form-check-label" for="flexRadioDefault9">
                                                    Desempregado
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                       name="employmentCheckbox"
                                                       id="flexRadioDefault10">
                                                <label class="form-check-label" for="flexRadioDefault10">
                                                    Empregado
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                       id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Não mostre meu currículo para meu atual empregador.
                                                </label>
                                            </div>
                                            <div class="help__blk">
                                                <span><img src="img/help.png" alt=""></span>
                                                <p>Evite constrangimentos na hora de procurar um novo emprego. Com
                                                    essa
                                                    função
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
                    </div>
                </div>
            </section>
        </div>

        <div class="tab" v-if="activePhase === 6">
            <section class="hero__area cadetro-hero pt-5 pb-5">
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
                                        <div class="progress-bar" role="progressbar" style="width: 86%;"
                                             aria-valuenow="86"
                                             aria-valuemin="0" aria-valuemax="100"></div>
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
                                                    <img src="img/b-1.svg" alt="">
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
                                                <img src="img/b-2.svg" alt="">
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
                    </div>
                </div>
            </section>
        </div>

        <div class="tab" v-if="activePhase === 7">
            <section class="hero__area cadetro-hero pt-5 pb-5">
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
                                        <div class="progress-bar" role="progressbar" style="width: 100%;"
                                             aria-valuenow="100"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="hero__form__right">
                                <h4> Seu currículo já está aparecendo nas buscas.</h4>
                                <p class="text-md">Para aumentar suas chances lembre-se de preencher o máximo de
                                    informações
                                    possíveis.</p>
                                <div class="view__resume__btn">
                                    <a href="" class="btn-gray">Visualizar Currículo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-sm-12">
            <div class="container position-relative">
                <div class="row">
                    <div class="col" style="text-align: left">
                        <div class="justify-content-start">
                            <button type="button" class="return__btn " @click="remove">Voltar
                            </button>
                        </div>
                    </div>
                    <div v-if="activePhase === 7" class="col" style="text-align: right">
                        <div class="form__button justify-content-end">
                            <button type="submit" @click="add">Salvar e próximo</button>
                        </div>
                    </div>
                    <div v-else class="col" style="text-align: right">
                        <div class="form__button justify-content-end">
                            <button type="submit" @click="add">Próximo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </div>
</template>

<script>
export default {

    name: 'register-curriculum.vue',

    data() {
        return {
            activePhase: 1,
            name: "",
            cep: "",
            address: "",
            state: "",
            city: "",
            age: "",
            phone: "",
            whatsapp: "",
            email: "",
            gender: "",

            schooling_level: "",
            formation: "",
            institution: "",
            hiring_type: "",
            desired_function: "",
            desired_salary: "",
            is_handicapped: "",
            cnh: "",

            company_field: "",
            occupied_job: "",
            experience_time: "",
        };
    },

    mounted() {
        console.log('Componente para registro de curriculo ok')
    },

    methods: {
        add() {
            this.activePhase = this.activePhase + 1;
        },
        remove() {
            this.activePhase = this.activePhase - 1;
        }
    }
};
</script>


<style>

</style>
