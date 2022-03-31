<template>
  <div>
    <section class="hero__area search-hero">
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="support__content__wrapper">
              <h4>
                Selecione os filtros e <br />
                encontre o candidato de ouro!
              </h4>
              <div
                class="
                  evalutaion__content__wrapper
                  text-start
                  support-content-wrapper
                "
              >
                <form action="/empresa/resultado-busca">
                  <div class="row gx-3 gy-1">
                    <div class="col-sm-6">
                      <div class="single__input__item">
                        <label for=""> Estado</label>
                        <select
                          class="form-select"
                          aria-label="Default select example"
                          v-model="state"
                        >
                          <option selected=""></option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="single__input__item">
                        <label for=""> Cidade</label>
                        <select
                          class="form-select"
                          aria-label="Default select example"
                          v-model="city"
                        >
                          <option selected=""></option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="single__input__item">
                        <label for=""> Função que o candidato exercerá</label>
                        <select
                          class="form-select"
                          aria-label="Default select example"
                          v-model="hiring_type"
                        >
                          <option
                            v-for="option in options_hiring"
                            :value="option.option"
                            :key="option.option"
                          >
                            {{ option.option }}
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="single__input__item">
                        <label for=""> Escolaridade</label>
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
                    <div class="col-sm-6">
                      <div class="single__input__item">
                        <label for=""> Tempo de Experiência</label>
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
                          <option value="9">Mais de 9 anos</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="single__input__item">
                        <label for=""> Formação</label>
                        <select
                          class="form-select"
                          aria-label="Default select example"
                          v-model="formation"
                        >
                          <option value="Bacharelado">Bacharelado</option>
                          <option value="Licenciatura">Licenciatura</option>
                          <option value="Tecnólogo">Tecnólogo</option>
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
                  <div class="evaluation__content__bottom__btns">
                    <button type="submit" class="bg-red">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="search__thumb">
        <img src="/img/shapes/search-thumb.png" alt="" />
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: "primary-filter-curriculum.vue",

  data() {
    return {
      curriculum: [],

      state: "",
      city: "",
      occupation: "",
      schooling: "",
      time_experience: "",
      formation: "",

      options_hiring: [
        { option: "CLT" },
        { option: "Pessoa Jurídica (PJ)" },
        { option: "Estagiário" },
        { option: "Trainee" },
        { option: "Jovem Aprendiz" },
      ],
    };
  },

  mounted() {
    console.log("componente primario para filtragem de curriculo ok");
  },

  methods: {
    postData() {
      let payload = {
        hiring: this.hiring_type,
        schooling: this.schooling,
        years: this.time_experience,
        formation: this.formation,
      };

      axios
        .post("/post-filter-primary", payload)
        .then((response) => {})
        .catch((error) => {
          console.log("erro ->", error);
        });
    },
  },
};
</script>

<style>
</style>

