<template>
  <div>
    <!--------- Result area start --------->
    <section class="result__area">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="results__filter__area">
              <div class="single__input__item mb-0">
                <button
                  class="btn btn-blue mb-4 rounded-pill"
                  @click="openModalCar"
                >
                  carrinho
                  <span class="badge badge-light car-number">{{
                    car.length
                  }}</span>
                </button>
              </div>
              <div class="card">
                <div class="single__input__item mb-0">
                  <input
                    type="text"
                    placeholder="Busca por Nome"
                    class="form-control"
                    v-model="name"
                  />
                  <button class="src-btn">
                    <i class="far fa-search"></i>
                  </button>
                </div>
              </div>
              <div class="card p-0 pb-2">
                <h4>Filtros</h4>
                <h4 style="color: red; cursor: pointer" @click="removeFilter">
                  Remover Filtros
                </h4>
                <div class="accordion" id="accordionExample">
                  <!-- <div class="accordion-item">
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
                          <label>Estado</label>
                          <select
                            class="form-select"
                            aria-label="Default select example"
                            v-model="state"
                          >
                            <option selected="">Paraná</option>
                          </select>
                        </div>
                        <div class="single__input__item mb-0">
                          <label>Cidade</label>
                          <select
                            class="form-select"
                            aria-label="Default select example"
                            v-model="city"
                          >
                            <option selected="">Guarapuava</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="accordion-item">
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
                          <input class="form-control" v-model="occupation" />
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="accordion-item">
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
                            <option value="0">0 - 1 ano</option>
                            <option value="1">1 - 3 anos</option>
                            <option value="3">3 - 5 anos</option>
                            <option value="5">5 - 7 anos</option>
                            <option value="7">7 - 9 anos</option>
                            <option value="9">Mais de 9 anos</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> -->
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
                            v-model="gender"
                          >
                            <option value="Feminino">Feminino</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Outro">Outro</option>
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
                            <option selected value="16">16</option>
                            <option :value="18">+18</option>
                            <option :value="20">+20</option>
                            <option :value="30">+30</option>
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
                            <option :value="1000">Até R$1.000,00</option>
                            <option :value="3000">Até R$3.000,00</option>
                            <option :value="5000">Até R$5.000,00</option>
                            <option :value="10000">Mais de R$5.000,00</option>
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
                            v-model="hiring_type"
                          >
                            <option value="CLT">CLT</option>
                            <option value="Pessoa Jurídica (PJ)">
                              Pessoa Jurídica (PJ)
                            </option>
                            <option value="Estagiário">Estagiário</option>
                            <option value="Trainee">Trainee</option>
                            <option value="Jovem Aprendiz">
                              Jovem Aprendiz
                            </option>
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
                            v-model="cnh"
                          >
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
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
                            v-model="is_handicapped"
                          >
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
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
                            v-model="is_employed"
                          >
                            <option value="Desempregado">Desempregado</option>
                            <option value="Empregado">Empregado</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="result__area__right__wrapper">
              <div class="result__are__title">
                <h3>currículos encontrados</h3>
              </div>
              <div class="result__items__wrapper">
                <div
                  class="single__result__item"
                  v-for="curriculum in curriculumFilterSearch"
                  :key="curriculum.id"
                >
                  <div class="single__result__item__top">
                    <p>Nome do Candidato: {{ curriculum.name }}</p>
                  </div>
                  <div class="single__result__item__body">
                    <div class="row">
                      <div
                        class="col"
                        v-for="experience in curriculum.experience"
                        :key="experience.id"
                      >
                        <p>
                          Função que Atuou: <b>{{ experience.occupied_job }}</b>
                        </p>
                        <p>
                          Tempo de Experiência:
                          <b>
                            {{ experience.years }} anos e
                            {{ experience.months }} meses</b
                          >
                        </p>
                        <p>
                          Ramo da Empresa que Atuou:
                          <b>{{ experience.company_field }}</b>
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <p>
                          Escolaridade: <b>{{ curriculum.schooling_level }}</b>
                        </p>
                        <p>
                          Formação:
                          <b>{{ curriculum.formation }}</b>
                        </p>
                        <p>
                          Salário Pretendido:<b>
                            {{ curriculum.desired_salary | formatNumber }}</b
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="single__result__item__bottom">
                    <p>
                      <span><i class="fas fa-map-marker-alt"></i></span>
                      {{ curriculum.city }} / {{ curriculum.state }}
                    </p>
                    <div class="single__result__item__bottom__right">
                      <!-- <div class="add__to__favourite">
                        Adicionar aos favoritos
                        <span class="favourite__btn"
                          ><i class="far fa-star"></i
                        ></span>
                      </div> -->
                      <div>
                        <button
                          class="btn btn-danger rounded-pill"
                          @click="removeToCar(curriculum.id)"
                          v-if="carContains(curriculum.id)"
                        >
                          Remover do carrinho
                        </button>
                        <button
                          class="btn rounded-pill btn-blue"
                          @click="
                            addToCar(
                              curriculum.id,
                              curriculum.name,
                              curriculum.desired_salary
                            )
                          "
                          v-else
                        >
                          Colocar no carrinho
                        </button>
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

    <!-- Modal Car-->
    <div
      class="modal fade"
      id="modal-car"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLongTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Carrinho</h5>
          </div>
          <div class="modal-body">
            <div
              class="alert alert-secondary mb-2"
              role="alert"
              v-for="c in car"
              :key="c.id"
            >
              <p>Nome do Candidato: {{ c.name_candidade }}</p>
              <p>Pretenção Salarial: {{ c.desired_salary | formatNumber }}</p>
              <p style="color: red; cursor: pointer" @click="removeToCar(c.id)">
                Remover
              </p>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
              @click="closeModalCar"
            >
              FECHAR
            </button>
            <button
              type="button"
              class="btn btn-primary"
              @click="purchaseCurriculum"
            >
              ADQUIRIR CURRÍCULOS
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
Vue.filter("formatNumber", function (value) {
  var multiply = value;
  var formatter = new Intl.NumberFormat("pt-BR", {
    style: "currency",
    currency: "BRL",
    minimumFractionDigits: 2,
  });
  return formatter.format(multiply);
});

export default {
  name: "filter-curriculum.vue",

  data() {
    return {
      name: "",
      state: "",
      city: "",
      occupation: "",
      time_experience: null,
      schooling: null,
      formation: null,
      gender: null,
      age: null,
      desired_salary: null,
      hiring_type: null,
      cnh: null,
      is_handicapped: null,
      is_employed: null,

      curriculumFilter: [],
      curriculumMe: [],
      user: [],
      quantity: 0,

      car: [],
    };
  },

  computed: {
    curriculumFilterSearch() {
      let items = this.curriculumFilter;

      items = this.curriculumFilter.filter((item) => {
        return item.name.toLowerCase().indexOf(this.name.toLowerCase()) > -1;
      });

      items = items.filter((item) => {
        if (this.schooling == null) return item;
        return item.schooling_level === this.schooling;
      });

      items = items.filter((item) => {
        if (this.formation == null) return item;
        return item.formation === this.formation;
      });

      items = items.filter((item) => {
        if (this.gender == null) return item;
        return item.gender === this.gender;
      });

      items = items.filter((item) => {
        if (this.hiring_type == null) return item;
        return item.hiring_type === this.hiring_type;
      });

      items = items.filter((item) => {
        if (this.cnh == null) return item;
        return item.cnh === this.cnh;
      });

      items = items.filter((item) => {
        if (this.is_handicapped == null) return item;
        return item.is_handicapped === this.is_handicapped;
      });

      items = items.filter((item) => {
        if (this.is_employed == null) return item;
        return item.is_employed === this.is_employed;
      });

      items = items.filter((item) => {
        if (this.age == null) return item;
        return item.age >= this.age;
      });

      items = items.filter((item) => {
        if (this.desired_salary == null) return item;
        return item.desired_salary >= this.desired_salary;
      });

      return items;
    },
  },

  created() {
    this.getCurriculum();
  },

  mounted() {},

  methods: {
    getCurriculum() {
      axios
        .get("/get-curriculum-general")
        .then((response) => {
          this.curriculumFilter = response.data.curriculumList;
          (this.curriculumMe = response.data.curriculumMe),
            (this.user = response.data.user);
          this.quantity = response.data.quantity;
        })
        .catch((error) => {});
    },

    carContains(curriculum_id) {
      if (this.car.some((car) => car.id === curriculum_id)) {
        return true;
      } else {
        return false;
      }
    },

    addToCar(curriculum_id, name_candidade, salary) {
      this.car.push({
        id: curriculum_id,
        name_candidade: name_candidade,
        desired_salary: salary,
      });
    },

    removeToCar(curriculum_id) {
      this.car = this.car.filter(function (item) {
        return item.id != curriculum_id;
      });
    },

    openModalCar() {
      $("#modal-car").modal("show");
    },

    closeModalCar() {
      $("#modal-car").modal("hide");
    },

    purchaseCurriculum() {
      if (this.car.length > this.quantity) {
        this.$swal(
          "Oops...",
          "Você não tem créditos de download suficiente!",
          "error"
        );
        return;
      }
      axios
        .post("/purchase-curriculum", this.car)
        .then((response) => {
          this.$swal(
            "Sucesso!",
            "Currículos adicionados a sua lista!",
            "success"
          );
          this.getCurriculum();
          this.clear();
        })
        .catch((error) => {
          this.$swal("Oops...", "Erro ao adquirir currículos!", "error");
        });
    },

    clear() {
      this.car = [];
      this.closeModalCar();
    },

    removeFilter() {
      this.age = null;
      this.name = "";
      this.schooling = null;
      this.formation = null;
      this.gender = null;
      this.hiring_type = null;
      this.cnh = null;
      this.is_handicapped = null;
      this.is_employed = null;
      this.desired_salary = null;
    },
  },
};
</script>

<style>
.btn {
  text-transform: uppercase;
  font-weight: bold;
}

.btn-blue {
  background-color: #0c63e4;
  color: white;
}

.car-number {
  background-color: white;
  color: black;
  font-weight: bold;
  font-size: 12px;
}

</style>
