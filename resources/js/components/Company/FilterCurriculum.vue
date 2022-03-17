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
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          class="accordion-button"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseOne"
                          aria-expanded="true"
                          aria-controls="collapseOne"
                        >
                          <span><i class="far fa-check"></i></span>
                          Localidade
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseOne"
                        class="accordion-collapse collapse show"
                        aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTwo"
                          aria-expanded="false"
                          aria-controls="collapseTwo"
                        >
                          <span><i class="far fa-check"></i></span>
                          Função
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
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
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
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
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFive">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseFive"
                          aria-expanded="false"
                          aria-controls="collapseFive"
                        >
                          <span><i class="far fa-check"></i></span>
                          Formação
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseFive"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingSix">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseSix"
                          aria-expanded="false"
                          aria-controls="collapseSix"
                        >
                          <span><i class="far fa-check"></i></span>
                          Gênero
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseSix"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingSix"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
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
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
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
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingNine">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseNine"
                          aria-expanded="false"
                          aria-controls="collapseNine"
                        >
                          <span><i class="far fa-check"></i></span>
                          Tipo de Contratação
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseNine"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingNine"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTen">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTen"
                          aria-expanded="false"
                          aria-controls="collapseTen"
                        >
                          <span><i class="far fa-check"></i></span>
                          CNH
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseTen"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTen"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingEleven">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseEleven"
                          aria-expanded="false"
                          aria-controls="collapseEleven"
                        >
                          <span><i class="far fa-check"></i></span>
                          Pessoa com Deficiência
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseEleven"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingEleven"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwelve">
                        <button
                          class="accordion-button collapsed"
                          type="button"
                          data-bs-toggle="collapse"
                          data-bs-target="#collapseTwelve"
                          aria-expanded="false"
                          aria-controls="collapseTwelve"
                        >
                          <span><i class="far fa-check"></i></span>
                          Situação Empregatícia
                          <i class="far fa-chevron-down"></i>
                        </button>
                      </h2>
                      <div
                        id="collapseTwelve"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwelve"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="single__input__item">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Paraná</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="single__input__item mb-0">
                            <select
                              class="form-select"
                              aria-label="Default select example"
                            >
                              <option selected="">Guarapuava</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
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
                <h3>resultados da busca</h3>
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
                      <div class="already__downloaded__alert">
                        Você já baixou este currículo.
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
                        <button>Colocar no carrinho</button>
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
  name: "filter-curriculum.vue",

  data() {
    return {};
  },

  mounted() {
    console.log("componente para filtragem de curriculo ok");
  },
};
</script>

<style>
</style>