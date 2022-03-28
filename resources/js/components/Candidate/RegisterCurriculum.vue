<template>
    <div>
        <div class="tab" v-if="activePhase === 1">
            <section class="hero__area cadetro-hero pt-5 pb-5">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="cadestro__content__wrap">
                                <h4>
                                    O seu futuro <br/>
                                    começa aqui!
                                </h4>
                                <p>
                                    É só preencher seus dados para você garantir sua vaga dos
                                    sonhos!
                                </p>
                                <div class="hero__progress">
                                    <div class="progress__top">
                                        <p>Progresso</p>
                                        <h5>0%</h5>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 0%"
                                            aria-valuenow="0"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></div>
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
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="single__input__item">
                                                <label for=""> Endereço</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="address"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> CEP</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="cep"
                                                    v-mask="'#####-###'"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> Estado</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="state"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> Cidade</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="city"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> Telefone</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="phone"
                                                    v-mask="'(##) # ####-####'"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> WhatsApp</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="whatsapp"
                                                    v-mask="'(##) # ####-####'"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="single__input__item">
                                                <label for=""> E-mail </label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    v-model="email"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="single__input__item">
                                                <label for=""> Gênero</label>
                                                <select
                                                    class="form-select"
                                                    aria-label="Default select example"
                                                    v-model="gender"
                                                >
                                                    <option value="Feminino">Feminino</option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Outro">Outro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="single__input__item">
                                                <label for=""> Data de Nascimento</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="age"
                                                    v-mask="'##/##/####'"
                                                />
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
                    <div class="row">
                        <div class="col-md-5">
                            <div class="cadestro__content__wrap">
                                <h4>
                                    O seu futuro <br/>
                                    começa aqui!
                                </h4>
                                <p>
                                    É só preencher seus dados para você garantir sua vaga dos
                                    sonhos!
                                </p>
                                <div class="hero__progress">
                                    <div class="progress__top">
                                        <p>Progresso</p>
                                        <h5>17%</h5>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 17%"
                                            aria-valuenow="17"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></div>
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
                                                <select
                                                    class="form-select"
                                                    aria-label="Default select example"
                                                    v-model="schooling_level"
                                                >
                                                    <option value="Educacao Infantil">
                                                        Educação Infantil
                                                    </option>
                                                    <option value="Ensino Fundamental">
                                                        Ensino Fundamental
                                                    </option>
                                                    <option value="Ensino Medio">Ensino Médio</option>
                                                    <option value="Ensino Superior">
                                                        Ensino Superior
                                                    </option>
                                                    <option value="Pos-graduacao">Pós-graduação</option>
                                                    <option value="Mestrado">Mestrado</option>
                                                    <option value="Doutorado">Doutorado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__input__item d-flex align-items-center">
                                        <label for=""> Formação</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select
                                                    class="form-select"
                                                    aria-label="Default select example"
                                                    v-model="formation"
                                                >
                                                    <option value="Bacharelado">Bacharelado</option>
                                                    <option value="Licenciatura">Licenciatura</option>
                                                    <option value="Tecnologico">Tecnológico</option>
                                                    <option value="Sequencial">Sequencial</option>
                                                    <option value="Graduacao Modulada">
                                                        Graduação Modulada
                                                    </option>
                                                    <option value="Educacao a Distancia">
                                                        Educação à Distância
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__input__item d-flex align-items-center">
                                        <label for=""> Instituição de Ensino</label>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="institution"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__input__item d-flex align-items-center">
                                        <label for="">Tipo de Contratação</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select
                                                    class="form-select"
                                                    aria-label="Default select example"
                                                    v-model="hiring_type"
                                                >
                                                    <option value="Clt">CLT</option>
                                                    <option value="Pj">Pessoa Jurídica (PJ)</option>
                                                    <option value="Estagiario">Estagiário</option>
                                                    <option value="Trainee">Trainee</option>
                                                    <option value="JovemAprendiz">Jovem Aprendiz</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__input__item d-flex align-items-center">
                                        <label for=""> Função desejada</label>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    v-model="desired_function"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__input__item d-flex align-items-center">
                                        <label for="">Pretensão Salarial</label>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <money
                                                    type="text"
                                                    class="form-control"
                                                    v-bind="money"
                                                    v-model="desired_salary"
                                                ></money>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__input__item d-flex align-items-center">
                                        <label for="">Pessoa com Deficiência (PcD)?</label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select
                                                    class="form-select"
                                                    aria-label="Default select example"
                                                    v-model="is_handicapped"
                                                >
                                                    <option value="Nao">Não</option>
                                                    <option value="Sim">Sim</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__input__item d-flex align-items-center">
                                        <label for="">Carteira Nacional de Habilitação (CNH)</label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <select
                                                    class="form-select"
                                                    aria-label="Default select example"
                                                    v-model="cnh"
                                                >
                                                    <option value="Nao">Não</option>
                                                    <option value="Sim">Sim</option>
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
                    <div class="row">
                        <div class="col-md-5">
                            <div class="cadestro__content__wrap">
                                <h4>
                                    O seu futuro <br/>
                                    começa aqui!
                                </h4>
                                <p>
                                    É só preencher seus dados para você garantir sua vaga dos
                                    sonhos!
                                </p>
                                <div class="hero__progress">
                                    <div class="progress__top">
                                        <p>Progresso</p>
                                        <h5>35%</h5>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 35%"
                                            aria-valuenow="17"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="hero__form__right">
                                <h4>Experiências profissionais</h4>
                                <form action="">
                                    <div class="form__card">
                                        <div
                                            class="card-body"
                                            v-for="experience in experiences"
                                            :key="experience.name_company"
                                        >
                                        <div class="row" style="text-align: right; padding:15px;">
                                            <i style="align: right; cursor: pointer; color: #ff4415; font-size: 25px;" @click="removeOccupiedjob(experience.name_company)" class="fa fa-trash"></i>
                                        </div>

                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for="">Nome da Empresa</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="experience.name_company"
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Ramo da Empresa </label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="experience.company_field"
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for="">Cargo Ocupado</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="experience.occupied_job"
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Período</label>
                                                <div class="nice__numbers__wrapper">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        v-model="experience.years"
                                                        disabled
                                                    />
                                                    <label for="">Anos e</label>
                                                </div>
                                                <div class="nice__numbers__wrapper">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        v-model="experience.months"
                                                        disabled
                                                    />
                                                    <label for=""> Meses.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body"
                                        >
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for="">Nome da Empresa</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="name_company"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Ramo da Empresa </label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="company_field"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for="">Cargo Ocupado</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="occupied_job"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Período</label>
                                                <div class="nice__numbers__wrapper">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        v-model="years"
                                                    />
                                                    <label for="">Anos e</label>
                                                </div>
                                                <div class="nice__numbers__wrapper">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        v-model="months"
                                                    />
                                                    <label for=""> Meses.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-experience">
                                            <button @click="addExperience()" type="button">
                                                <span><i class="far fa-plus"></i></span> adicionar
                                                experiência
                                            </button>
                                        </div>
                                    </div>
                                    <h4>Cursos extracurriculares</h4>
                                    <div class="form__card">
                                        <div
                                            class="card-body"
                                            v-for="course in courses"
                                            :key="course.name_courses"
                                        >
                                        <div class="row" style="text-align: right; padding:15px;">
                                            <i style="align: right; cursor: pointer; color: #ff4415; font-size: 25px;" @click="removeCourses(course.name_courses)" class="fa fa-trash"></i>
                                        </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Nome do Curso</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="course.name_courses"
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Instituição ou Escola</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="course.school"
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Carga Horária</label>
                                                <div class="nice__numbers__wrapper">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        v-model="course.hours"
                                                        disabled
                                                    />
                                                    <label for=""> Horas</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Nome do Curso</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="name_courses"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Instituição ou Escola</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-model="school"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> Carga Horária</label>
                                                <div class="nice__numbers__wrapper">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        v-model="hours"
                                                    />
                                                    <label for=""> Horas</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="add-experience">
                                            <button type="button" @click="addCourses()">
                                                <span><i class="far fa-plus"></i></span> adicionar Curso
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
                    <div class="row">
                        <div class="col-md-5">
                            <div class="cadestro__content__wrap">
                                <h4>
                                    O seu futuro <br/>
                                    começa aqui!
                                </h4>
                                <p>
                                    É só preencher seus dados para você garantir sua vaga dos
                                    sonhos!
                                </p>
                                <div class="hero__progress">
                                    <div class="progress__top">
                                        <p>Progresso</p>
                                        <h5>52%</h5>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 52%"
                                            aria-valuenow="52"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="hero__form__right">
                                <h4>foto de perfil</h4>
                                <form action="">
                                    <div class="form__card">
                                        <div class="user__image__upload__wrapper">
                                            <div class="user__image__up__btns d-flex">
                                                <div class="row">
                                                    <input type="file" v-on:change="onChange"/>
                                                </div>
                                                <div class="row">
                                                    <a
                                                        v-if="curriculum_photo"
                                                        style="cursor: pointer"
                                                        @click="removeImagem"
                                                    >Remover foto</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="user__image">
                                                <img
                                                    :src="curriculum_photo"
                                                    v-if="curriculum_photo"
                                                    alt=""
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <h4>Considerações adicionais</h4>
                                    <div class="additional__form__wrapper">
                                        <div class="single__input__item">
                      <textarea
                          name=""
                          id=""
                          class="form-control"
                          v-model="additional_considerations"
                      ></textarea>
                                        </div>
                                        <div class="additional__checkboxes">
                                            <label for="">Como conheceu nosso site?</label>
                                            <div class="row">
                                                <select class="form-control" v-model="found_us">
                                                    <option
                                                        v-for="option in options"
                                                        :value="option.name"
                                                    >
                                                        {{ option.name }}
                                                    </option>
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

        <div class="tab" v-if="activePhase === 5">
            <section class="hero__area cadetro-hero pt-5 pb-5">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="cadestro__content__wrap">
                                <h4>
                                    O seu futuro <br/>
                                    começa aqui!
                                </h4>
                                <p>
                                    É só preencher seus dados para você garantir sua vaga dos
                                    sonhos!
                                </p>
                                <div class="hero__progress">
                                    <div class="progress__top">
                                        <p>Progresso</p>
                                        <h5>69%</h5>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 69%"
                                            aria-valuenow="69"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="hero__form__right">
                                <h4>VOCÊ ESTÁ EMPREGADO OU DESEMPREGADO?</h4>
                                <form action="">
                                    <div class="form__card">
                                        <div
                                            class="
                        single__input__item
                        employed-flex
                        d-flex
                        align-items-center
                      "
                                        >
                                            <label for=""> Atualmente estou:</label>
                                            <select v-model="is_employed">
                                                <option>Empregado</option>
                                                <option>Desempregado</option>
                                            </select>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value=""
                                                    id="flexCheckDefault"
                                                />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Não mostre meu currículo para meu atual empregador.
                                                </label>
                                            </div>
                                            <div class="help__blk">
                                                <span><img src="img/help.png" alt=""/></span>
                                                <p>
                                                    Evite constrangimentos na hora de procurar um novo
                                                    emprego. Com essa função seu currículo será ocultado
                                                    do seu atual empregador.
                                                    <b
                                                    >Esta função possui um custo adicional de
                                                        R$6,50/mês.</b
                                                    >
                                                </p>
                                            </div>
                                            <div
                                                class="single__input__item d-flex align-items-center"
                                            >
                                                <label for=""> CNPJ do Empregador</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            v-mask="'##.###.###/####-##'"
                                                        />
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
                    <div class="row">
                        <div class="col-md-4">
                            <div class="cadestro__content__wrap">
                                <h4>Escolha o plano ideal para você</h4>
                                <p>
                                    Escolha o plano mais adequado a sua necessidade e boa sorte na
                                    sua jornada!
                                </p>
                                <div class="hero__progress">
                                    <div class="progress__top">
                                        <p>Progresso</p>
                                        <h5>86%</h5>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 86%"
                                            aria-valuenow="86"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></div>
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
                                                    <p>plano</p>
                                                    <h5>Mensal</h5>
                                                </div>
                                                <hr/>
                                                <div class="pricing__card__price">
                                                    <div class="rate--count">1x</div>
                                                    <span>R$<b>15</b>,90</span>
                                                </div>
                                                <div class="p">ou seja <b> R$0,53/dia</b></div>
                                                <hr/>
                                                <div class="validity__text">Vigência de 30 dias</div>
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
                                                    <img src="img/b-1.svg" alt=""/>
                                                </div>
                                                <div class="pricing__card__title">
                                                    <p>plano</p>
                                                    <h5>Trimestral</h5>
                                                </div>
                                                <hr/>
                                                <div class="pricing__card__price">
                                                    <div class="rate--count">3x</div>
                                                    <span>R$<b>12</b>,90</span>
                                                </div>
                                                <div class="p">ou seja <b> R$0,43/dia</b></div>
                                                <hr/>
                                                <div class="validity__text">Vigência de 90 dias</div>
                                            </div>
                                            <div class="pricing__card__bottom">
                                                <a href="">Escolher Plano</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="pricing__single__card card-sky">
                                            <div class="b-1">
                                                <img src="img/b-2.svg" alt=""/>
                                            </div>
                                            <div class="pricing__card__body">
                                                <div class="pricing__card__title">
                                                    <p>plano</p>
                                                    <h5>semestral</h5>
                                                </div>
                                                <hr/>
                                                <div class="pricing__card__price">
                                                    <div class="rate--count">1x</div>
                                                    <span>R$<b>9</b>,90</span>
                                                </div>
                                                <div class="p">ou seja <b> R$0,33/dia</b></div>
                                                <hr/>
                                                <div class="validity__text">Vigência de 180 dias</div>
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
                    <div class="row">
                        <div class="col-md-5">
                            <div class="cadestro__content__wrap">
                                <h4>Parabéns!</h4>
                                <p>
                                    Estamos torcendo por você e te manteremos informado sobre
                                    novidades.
                                </p>
                                <div class="hero__progress">
                                    <div class="progress__top">
                                        <p>Progresso</p>
                                        <h5>100%</h5>
                                    </div>
                                    <div class="progress">
                                        <div
                                            class="progress-bar"
                                            role="progressbar"
                                            style="width: 100%"
                                            aria-valuenow="100"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="hero__form__right">
                                <h4>Seu currículo já está aparecendo nas buscas.</h4>
                                <p class="text-md">
                                    Para aumentar suas chances lembre-se de preencher o máximo de
                                    informações possíveis.
                                </p>
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
                            <button type="button" class="return__btn" @click="remove">
                                Voltar
                            </button>
                        </div>
                    </div>
                    <div v-if="activePhase === 7" class="col" style="text-align: right">
                        <div class="form__button justify-content-end">
                            <button type="submit" @click="createCurriculum">
                                Salvar e Visualizar Currículo
                            </button>
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
        <div style="text-align: center; margin-top: 40px">
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
import {VMoney} from "v-money";

export default {
    name: "register-curriculum.vue",

    directives: {money: VMoney},

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
            money: {
                decimal: ",",
                thousands: ".",
                prefix: "",
                suffix: "",
                precision: 2,
                masked: false,
            },
            desired_salary: "",
            is_handicapped: "",
            cnh: "",

            name_company: "",
            company_field: "",
            occupied_job: "",
            years: "",
            months: "",

            name_courses: "",
            school: "",
            hours: "",

            is_employed: "",
            found_us: "",
            file: {},
            removenull: null,
            subi: null,
            curriculum_photo: "",
            additional_considerations: "",
            options: [
                {name: "Indicação"},
                {name: "Rádio"},
                {name: "Televisão"},
                {name: "Google"},
                {name: "YouTube"},
                {name: "Facebook"},
                {name: "Instagram"},
                {name: "Outros"},
            ],

            experiences: [],
            courses: [],
        };
    },

    methods: {

        add() {
            this.activePhase = this.activePhase + 1;
        },
        remove() {
            this.activePhase = this.activePhase - 1;
        },

        onChange(e) {
            this.file = e.target.files[0];
            const teste = e.target.files[0];
            if (this.file.size < 1005222) {
                //console.log(this.file.size);
                this.subi = this.file.name;
                this.curriculum_photo = URL.createObjectURL(teste);
            } else {
                this.$swal(
                    "Oops...",
                    "Imagem com tamanho acima do permitido!",
                    "error"
                );
                this.removeImagem();
            }
        },

        removeImagem() {
            this.subi = null;
            this.file = this.removenull;
            this.curriculum_photo = null;
        },

        addExperience() {
            this.experiences.push({
                name_company: this.name_company,
                company_field: this.company_field,
                occupied_job: this.occupied_job,
                years: this.years,
                months: this.months,
            });
            this.name_company = "";
            this.company_field = "";
            this.occupied_job = "";
            this.years = "";
            this.months = "";
        },

        removeOccupiedjob(name){
            this.experiences = this.experiences.filter(function(item){
                return item.name_company != name;
            });

            //this.experiences.pop();
        },

        addCourses() {
            this.courses.push({
                name_courses: this.name_courses,
                school: this.school,
                hours: this.hours,
            });

            this.name_courses = "";
            this.school = "";
            this.hours = "";
        },
        removeCourses(name){
            this.courses = this.courses.filter(function(item){
                return item.name_courses != name;
            });
        },

        createCurriculum() {
            let payload = {
                name: this.name,
                cep: this.cep,
                address: this.address,
                state: this.state,
                city: this.city,
                age: this.age,
                phone: this.phone,
                whatsapp: this.whatsapp,
                email: this.email,
                gender: this.gender,

                schooling_level: this.schooling_level,
                formation: this.formation,
                institution: this.institution,
                hiring_type: this.hiring_type,
                desired_function: this.desired_function,

                desired_salary: this.desired_salary,
                is_handicapped: this.is_handicapped,
                cnh: this.cnh,

                experiences: this.experiences,
                courses: this.courses,

                is_employed: this.is_employed,
                found_us: this.found_us,
                file: this.file,
                additional_considerations: this.additional_considerations,
            };


            axios
                .post("/create-curriculum", payload)
                .then((response) => {
                    this.$swal("Sucesso!", "Currículo cadastrado", "success");
                })
                .catch((error) => {
                    this.$swal("Oops...", "Erro ao cadastrar!", "error");
                });
        },
    },
};
</script>


<style>
</style>
