<template>
    <div>
        <!--------- Result area start --------->
        <section class="result__area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="results__filter__area">
                            <form action="">
                                <div class="card">
                                    <div class="single__input__item mb-0">
                                        <input
                                            type="text"
                                            placeholder="Busca por ID"
                                            class="form-control"
                                        />
                                        <button class="src-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card p-0 pb-2">
                                    <h4>Filtros</h4>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="collapseThree"
                                                >
                                                    <span><i class="far fa-check"></i></span>
                                                    Tempo de Experiência
                                                    <i class="far fa-chevron-down"></i>
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseThree"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingThree"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <div class="single__input__item">
                                                        <select
                                                            class="form-select"
                                                            aria-label="Default select example"
                                                            v-model="time_experience"
                                                        >
                                                            <option value="0-1">0 - 1 ano</option>
                                                            <option value="1-3">1 - 3 anos</option>
                                                            <option value="3-5">3 - 5 anos</option>
                                                            <option value="5-7">5 - 7 anos</option>
                                                            <option value="7-9">7 - 9 anos</option>
                                                            <option value="9+">Mais de 9 anos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour"
                                                    aria-expanded="false"
                                                    aria-controls="collapseFour"
                                                >
                                                    <span><i class="far fa-check"></i></span>
                                                    Escolaridade
                                                    <i class="far fa-chevron-down"></i>
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseFour"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingFour"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <div class="single__input__item">
                                                        <select
                                                            class="form-select"
                                                            aria-label="Default select example"
                                                            v-model="schooling"
                                                        >
                                                            <option value="Educacao Infantil">Educação Infantil</option>
                                                            <option value="Ensino Fundamental">Ensino Fundamental
                                                            </option>
                                                            <option value="Ensino Medio">Ensino Médio</option>
                                                            <option value="Ensino Superior">Ensino Superior</option>
                                                            <option value="Pos-graduacao">Pós-graduação</option>
                                                            <option value="Mestrado">Mestrado</option>
                                                            <option value="Doutorado">Doutorado</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSeven">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseSeven"
                                                    aria-expanded="false"
                                                    aria-controls="collapseSeven"
                                                >
                                                    <span><i class="far fa-check"></i></span>
                                                    Faixa Etária
                                                    <i class="far fa-chevron-down"></i>
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseSeven"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingSeven"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <div class="single__input__item">
                                                        <select
                                                            class="form-select"
                                                            aria-label="Default select example"
                                                            v-model="age"
                                                        >
                                                            <option value="16-20">16 - 20 anos</option>
                                                            <option value="20-25">20 - 25 anos</option>
                                                            <option value="25-30">25 - 30 anos</option>
                                                            <option value="30-40">30 - 40 anos</option>
                                                            <option value="40-50">40 - 50 anos</option>
                                                            <option value="50-60">50 - 60 anos</option>
                                                            <option value="60+">Mais de 60 anos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEight">
                                                <button
                                                    class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseEight"
                                                    aria-expanded="false"
                                                    aria-controls="collapseEight"
                                                >
                                                    <span><i class="far fa-check"></i></span>
                                                    Pretenção Salarial
                                                    <i class="far fa-chevron-down"></i>
                                                </button>
                                            </h2>
                                            <div
                                                id="collapseEight"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="headingEight"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    <div class="single__input__item">
                                                        <select
                                                            class="form-select"
                                                            aria-label="Default select example"
                                                            v-model="desired_salary"
                                                        >
                                                            <option value="Ate 1000">Até R$1.000,00</option>
                                                            <option value="Ate 3000">Até R$3.000,00</option>
                                                            <option value="Ate 5000">Até R$5.000,00</option>
                                                            <option value="Mais de 5000">Mais de R$5.000,00</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="result__area__right__wrapper">
                            <div class="result__are__title">
                                <h3>Meus Currículos</h3>
                            </div>
                            <div class="result__items__wrapper">
                                <div class="single__result__item">
                                    <div class="single__result__item__top">
                                        <p>ID do currículo: 123456</p>
                                    </div>
                                    <div class="single__result__item__body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p>Função que Atuou: <b>Vendedor</b></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Escolaridade: <b>Superior Completo</b></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
                                                    Tempo de Experiência:
                                                    <b> 4 anos e 6 meses</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
                                                    Formação:
                                                    <b>Administração</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Ramo da Empresa que Atuou: <b>Automóveis</b></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
                                                    Salário Pretendido:<b> R$4.000,00 - R$6.000,00</b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__result__item__bottom">
                                        <p>
                                            <span><i class="fas fa-map-marker-alt"></i></span>
                                            Guarapuava/Paraná
                                        </p>
                                        <div class="single__result__item__bottom__right">
                                            <div class="add__to__favourite">
                                                Adicionar aos favoritos
                                                <span class="favourite__btn"
                                                ><i class="far fa-star"></i
                                                ></span>
                                            </div>
                                            <div class="add__cart__btn">
                                                <button>Baixar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single__result__item">
                                    <div class="single__result__item__top">
                                        <p>ID do currículo: 123456</p>
                                    </div>
                                    <div class="single__result__item__body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p>Função que Atuou: <b>Vendedor</b></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Escolaridade: <b>Superior Completo</b></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
                                                    Tempo de Experiência:
                                                    <b> 4 anos e 6 meses</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
                                                    Formação:
                                                    <b>Administração</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>Ramo da Empresa que Atuou: <b>Automóveis</b></p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p>
                                                    Salário Pretendido:<b> R$4.000,00 - R$6.000,00</b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single__result__item__bottom">
                                        <p>
                                            <span><i class="fas fa-map-marker-alt"></i></span>
                                            Guarapuava/Paraná
                                        </p>
                                        <div class="single__result__item__bottom__right">
                                            <div class="add__to__favourite">
                                                Adicionar aos favoritos
                                                <span class="favourite__btn"
                                                ><i class="far fa-star"></i
                                                ></span>
                                            </div>
                                            <div class="add__cart__btn">
                                                <button>Baixar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--------- Result area end --------->
    </div>
</template>

<script>
export default {
    name: "acess-curriculum.vue",

    data() {
        return {
            time_experience: "",
            schooling: "",
            age: "",
            desired_salary: "",
        };
    },

    mounted() {
        console.log("componente para filtragem de curriculo ok");
    },
};
</script>

<style>
</style>
