<template>
  <div>
    <h2 align="center">Currículo completo {{ curriculum.name }}</h2>
    <div class="container mb-5 mt-5">
      <h3>Dados Pessoais</h3>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Nome completo</label>
            <input type="text" class="form-control" v-model="curriculum.name" />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.email"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Endereço</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.address"
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Cidade</label>
            <input type="text" class="form-control" v-model="curriculum.city" />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Estado</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.state"
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Data de Nascimento</label>
            <input type="text" class="form-control" v-model="curriculum.age" />
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">CEP</label>
            <input type="text" class="form-control" v-model="curriculum.cep" />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Telefone</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.phone"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">WhatsApp</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.whatsapp"
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Gênero Sexual</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.gender"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Nível de Escolaridade</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.schooling_level"
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Formação</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.formation"
            />
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Instituição</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.institution"
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2"
              >Tipo de Contratação Desejada</label
            >
            <input
              type="text"
              class="form-control"
              v-model="curriculum.hiring_type"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Função Desejada</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.desired_function"
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Possuí Deficiência?</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.is_handicapped"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Pretenção Salarial</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.desired_salary"
            />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Possuí CNH?</label>
            <input type="text" class="form-control" v-model="curriculum.cnh" />
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput">Considerações Adicionais</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.additional_considerations"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput"
              >Onde Foi Encontrada a Plataforma</label
            >
            <input
              type="text"
              class="form-control"
              v-model="curriculum.found_us"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="formGroupExampleInput2">Está Empregado?</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.is_employed"
            />
          </div>
        </div>
      </div>

      <div class="">
        <div class="mt-5">
          <div class="evaluation__content__bottom__btns">
            <a href="#" @click="editData">Atualizar dados</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5 mt-5">
      <h3>Experiências Profissionais</h3>
      <div class="row mb-3">
        <div
          class="col-sm-6"
          v-for="experience in experiences"
          :key="experience.experience"
        >
          <h5>Nome da Empresa: {{ experience.name_company }}</h5>
          <p>Ramo na empresa: {{ experience.company_field }}</p>
          <p>Cargo Ocupado: {{ experience.occupied_job }}</p>
          <p>Anos: {{ experience.years }}</p>
          <p>Meses: {{ experience.months }}</p>
          <p
            style="color: blue; cursor: pointer"
            @click="openModalExperience(experience.id)"
          >
            Editar esperiência
          </p>
        </div>
      </div>
    </div>

    <div class="container mb-5 mt-5">
      <h3>Cursos</h3>
      <div class="row mb-3">
        <div
          class="col-sm-6"
          v-for="course in courses"
          :key="course.name_courses"
        >
          <h5>Nome do Curso: {{ course.name_courses }}</h5>
          <p>Escola: {{ course.school }}</p>
          <p>Horas Empregadas: {{ course.hours }}</p>
          <p style="color: blue; cursor: pointer">Editar curso</p>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="edit-experience"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Experiência</h5>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "see-curriculum",

  data() {
    return {
      curriculum: [],

      experiences: [],
      courses: [],
    };
  },

  mounted() {
    this.getData();
  },

  methods: {
    getData() {
      axios
        .get("/get-my-curriculum")
        .then((response) => {
          this.curriculum = response.data.curriculum;
          this.experiences = response.data.experiences;
          this.courses = response.data.courses;
        })
        .catch((error) => {});
    },

    editData() {
      axios
        .put("")
        .then((response) => {})
        .catch((error) => {});
    },

    openModalExperience(experience) {
      /* axios
        .get("")
        .then((response) => {})
        .catch((error) => {}); */

      $("#edit-experience").modal("show");
    },
  },
};
</script>

<style>
</style>