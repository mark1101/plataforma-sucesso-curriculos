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
                  <div class="accordion" id="accordionExample">
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
                              <option value="Pos-graduacao">
                                Pós-graduação
                              </option>
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
              </form>
            </div>
          </div>
          <div class="col-md-9">
            <div class="result__area__right__wrapper">
              <div class="result__are__title">
                <h3>Meus Currículos</h3>
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
                        <button class="btn btn-danger rounded-pill" @click="createCurriculum(curriculum.id)">
                          Baixar Currículo
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
  name: "acess-curriculum.vue",

  data() {
    return {
      name: "",
      time_experience: null,
      schooling: null,
      age: null,
      desired_salary: null,
      formation: null,
      gender: null,
      hiring_type: null,
      is_employed: null,

      curriculumMe: [],
    };
  },

  computed: {
    curriculumFilterSearch() {
      let items = this.curriculumMe;

      items = this.curriculumMe.filter((item) => {
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
        if (this.is_employed == null) return item;
        return item.is_employed === this.is_employed;
      });

      return items;
    },
  },

  mounted() {
    axios
      .get("/get-curriculum-general")
      .then((response) => {
        this.curriculumMe = response.data.curriculumMe;
      })
      .catch((error) => {
        console.log(error);
      });
  },

  methods:{
      createCurriculum(curriculum){
          axios.get('/create-curriculum-download/' + curriculum).then(response => {

          }).catch(error => {

          })
      }
  },

  created() {},
};
</script>

<style>
</style>
