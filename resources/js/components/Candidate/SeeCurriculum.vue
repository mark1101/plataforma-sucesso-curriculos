<template>
  <div>
    <h2 align="center">Currículo completo {{ curriculum.name }}</h2>
    <div class="container mb-5 mt-5">
      <div class="row mt-3 mb-2">
        <div class="col-sm-4">
          <img src="img/user-image.png" alt="" />
        </div>
      </div>
      <h3>Dados Pessoais</h3>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Nome completo</label>
            <input type="text" class="form-control" v-model="curriculum.name" />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.email"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Endereço</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.address"
            />
          </div>
          <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" v-model="curriculum.city" />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Estado</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.state"
            />
          </div>
          <div class="form-group">
            <label>Data de Nascimento</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.age"
              v-mask="'##/##/####'"
            />
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label>CEP</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.cep"
              v-mask="'#####-###'"
            />
          </div>
          <div class="form-group">
            <label>Telefone</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.phone"
              v-mask="'(##) # ####-####'"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>WhatsApp</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.whatsapp"
              v-mask="'(##) # ####-####'"
            />
          </div>
          <div class="form-group">
            <label>Gênero Sexual</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.gender"
            >
              <option
                v-for="option in options_gender"
                :value="option.option"
                :key="option.option"
              >
                {{ option.option }}
              </option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Nível de Escolaridade</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.schooling_level"
            >
              <option
                v-for="option in options_schooling"
                :value="option.option"
                :key="option.option"
              >
                {{ option.option }}
              </option>
            </select>
          </div>
          <div class="form-group">
            <label>Formação</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.formation"
            >
              <option
                v-for="option in options_formation"
                :value="option.option"
                :key="option.option"
              >
                {{ option.option }}
              </option>
            </select>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Instituição</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.institution"
            />
          </div>
          <div class="form-group">
            <label>Tipo de Contratação Desejada</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.hiring_type"
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
        <div class="col-sm-4">
          <div class="form-group">
            <label>Função Desejada</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.desired_function"
            />
          </div>
          <div class="form-group">
            <label>Possuí Deficiência?</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.is_handicapped"
            >
              <option
                v-for="option in options_handicapped"
                :value="option.option"
                :key="option.option"
              >
                {{ option.option }}
              </option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Pretenção Salarial (R$)</label>
            <money
              type="text"
              class="form-control"
              v-bind="money"
              v-model="curriculum.desired_salary"
            ></money>
          </div>
          <div class="form-group">
            <label>Possuí CNH?</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.cnh"
            >
              <option
                v-for="option in options_cnh"
                :value="option.option"
                :key="option.option"
              >
                {{ option.option }}
              </option>
            </select>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Considerações Adicionais</label>
            <input
              type="text"
              class="form-control"
              v-model="curriculum.additional_considerations"
            />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Onde Foi Encontrada a Plataforma</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.found_us"
            >
              <option
                v-for="option in options_found"
                :value="option.option"
                :key="option.option"
              >
                {{ option.option }}
              </option>
            </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Está Empregado?</label>
            <select
              class="form-select"
              aria-label="Default select example"
              v-model="curriculum.is_employed"
            >
              <option
                v-for="option in options_employed"
                :value="option.option"
                :key="option.option"
              >
                {{ option.option }}
              </option>
            </select>
          </div>
        </div>
      </div>

      <div class="">
        <div class="mt-5">
          <div class="evaluation__content__bottom__btns">
            <button class="btn" @click="editCurriculum">Atualizar dados</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5 mt-5">
      <h3>Experiências Profissionais</h3>
      <div class="row mb-3">
        <div
          class="col-sm-4"
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
            Editar experiência
          </p>
          <p
            style="color: red; cursor: pointer"
            @click="deleteExperience(experience.id)"
          >
            Apagar experiência
          </p>
        </div>
        <div class="col-sm-4">
          <div class="mt-5">
            <div class="evaluation__content__bottom__btns">
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary"
                @click="openModalExperienceCreate"
              >
                Cadastrar Experiência
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mb-5 mt-5">
      <h3>Cursos</h3>
      <div class="row">
        <div
          class="col-sm-4"
          v-for="course in courses"
          :key="course.name_courses"
        >
          <h5>Nome do Curso: {{ course.name_courses }}</h5>
          <p>Escola: {{ course.school }}</p>
          <p>Horas Empregadas: {{ course.hours }}</p>
          <p
            style="color: blue; cursor: pointer"
            @click="openModalCourse(course.id)"
          >
            Editar curso
          </p>
          <p
            style="color: red; cursor: pointer"
            @click="deleteCourse(course.id)"
          >
            Apagar Curso
          </p>
        </div>
        <div class="col-sm-4">
          <div class="mt-5">
            <div class="evaluation__content__bottom__btns">
              <button class="btn" type="button" @click="openModalCourseCreate">
                Cadastrar novo curso
              </button>
            </div>
          </div>
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
            <h5 class="modal-title" id="exampleModalLabel">
              Editar Experiência
            </h5>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="form-group">
                <label>Nome da empresa</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="experienceUpdate.name_company"
                />
              </div>
              <div class="form-group">
                <label>Ramo da empresa</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="experienceUpdate.company_field"
                />
              </div>
              <div class="form-group">
                <label>Cargo Ocupado</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="experienceUpdate.occupied_job"
                />
              </div>
              <div class="form-group">
                <label>Anos</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="experienceUpdate.years"
                />
              </div>
              <div class="form-group">
                <label>Meses</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="experienceUpdate.months"
                />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-primary"
              @click="editExperience"
            >
              Salvar
            </button>
          </div>
        </div>
      </div>
    </div>

    <div
      class="modal fade"
      id="edit-course"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Curso</h5>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="form-group">
                <label>Nome do Curso</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="courseUpdate.name_courses"
                />
              </div>
              <div class="form-group">
                <label>Escola</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="courseUpdate.school"
                />
              </div>
              <div class="form-group">
                <label>Horas</label>
                <input
                  type="text"
                  class="form-control"
                  v-model="courseUpdate.hours"
                />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" @click="editCourse">
              Salvar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Create Experience -->
    <div
      class="modal fade"
      id="create-experience"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Adicionar nova experiência
            </h5>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nome da Empresa</label>
              <input
                type="text"
                class="form-control"
                v-model="newExperience.name_company"
              />
            </div>
            <div class="form-group">
              <label>Ramo da Empresa</label>
              <input
                type="text"
                class="form-control"
                v-model="newExperience.company_field"
              />
            </div>
            <div class="form-group">
              <label>Cargo Ocupado</label>
              <input
                type="text"
                class="form-control"
                v-model="newExperience.occupied_job"
              />
            </div>
            <div class="form-group">
              <label>Anos de experiência</label>
              <input
                type="number"
                class="form-control"
                v-model="newExperience.years"
              />
            </div>
            <div class="form-group">
              <label>Meses de Experiência </label>
              <input
                type="number"
                class="form-control"
                v-model="newExperience.months"
              />
            </div>
          </div>
          <div class="modal-footer" style="background-color: white">
            <button
              type="button"
              class="btn btn-primary"
              @click="createExperience"
            >
              Cadastrar
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Create Course -->
    <div
      class="modal fade"
      id="create-course"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Adicionar novo Curso
            </h5>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nome do Curso</label>
              <input
                type="text"
                class="form-control"
                v-model="newCourse.name_courses"
              />
            </div>
            <div class="form-group">
              <label>Instituição</label>
              <input
                type="text"
                class="form-control"
                v-model="newCourse.school"
              />
            </div>
            <div class="form-group">
              <label>Horas Empregadas </label>
              <input
                type="number"
                class="form-control"
                v-model="newCourse.hours"
              />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" @click="createCourse">
              Cadastrar
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { VMoney } from "v-money";

export default {
  name: "see-curriculum",

  directives: { money: VMoney },

  data() {
    return {
      curriculum: [],
      experienceUpdate: [],
      courseUpdate: [],

      money: {
        decimal: ",",
        thousands: ".",
        prefix: "",
        suffix: "",
        precision: 2,
        masked: false,
      },

      newExperience: {
        name_company: null,
        company_field: null,
        years: null,
        months: null,
      },

      newCourse: {
        name_courses: null,
        school: null,
        hours: null,
      },

      experiences: [],
      courses: [],

      options_handicapped: [{ option: "Sim" }, { option: "Não" }],

      options_cnh: [
        { option: "A" },
        { option: "B" },
        { option: "AB" },
        { option: "C" },
        { option: "D" },
        { option: "E" },
      ],

      options_employed: [{ option: "Empregado" }, { option: "Desempregado" }],

      options_gender: [
        { option: "Feminino" },
        { option: "Masculino" },
        { option: "Outro" },
      ],

      options_found: [
        { option: "Indicação" },
        { option: "Radio" },
        { option: "Televisão" },
        { option: "Google" },
        { option: "Youtube" },
        { option: "Facebook" },
        { option: "Instagram" },
        { option: "Outros" },
      ],

      options_hiring: [
        { option: "CLT" },
        { option: "Pessoa Jurídica (PJ)" },
        { option: "Estagiário" },
        { option: "Trainee" },
        { option: "Jovem Aprendiz" },
      ],

      options_schooling: [
        { option: "Educação Infantil" },
        { option: "Ensino Fundamental" },
        { option: "Ensino Médio" },
        { option: "Ensino Superior" },
        { option: "Pós Graduação" },
        { option: "Mestrado" },
        { option: "Doutorado" },
      ],

      options_formation: [
        { option: "Bacharelado" },
        { option: "Licenciatura" },
        { option: "Tecnólogo" },
        { option: "Sequencial" },
        { option: "Graduacao Modulada" },
        { option: "Educação à Distância" },
      ],
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

    editCurriculum() {
      let payload = {
        name: this.curriculum.name,
        address: this.curriculum.address,
        state: this.curriculum.state,
        email: this.curriculum.email,
        age: this.curriculum.age,
        cep: this.curriculum.cep,
        city: this.curriculum.city,
        cnh: this.curriculum.cnh,
        formation: this.curriculum.formation,
        gender: this.curriculum.gender,
        hiring_type: this.curriculum.hiring_type,
        institution: this.curriculum.institution,
        is_employed: this.curriculum.is_employed,
        is_handicapped: this.curriculum.is_handicapped,
        schooling_level: this.curriculum.schooling_level,
        whatsapp: this.curriculum.whatsapp,
        desired_salary: this.curriculum.desired_salary,
        desired_function: this.curriculum.desired_function,
        additional_considerations: this.curriculum.additional_considerations,
        found_us: this.curriculum.found_us,
        phone: this.curriculum.phone,
      };
      axios
        .put("/edit-curriculum", payload)
        .then((response) => {
          this.$swal("Sucesso!", "Os dados foram atualizados", "success");
          $("#edit-curriculum");
          this.getData();
        })
        .catch((error) => {});
    },

    openModalExperience(experience) {
      console.log("aaaaaa");
      axios
        .get("/get-experience/" + experience)
        .then((response) => {
          this.experienceUpdate = response.data.experience;
          $("#edit-experience").modal("show");
        })
        .catch((error) => {});
    },

    editExperience() {
      let payload = {
        name_company: this.experienceUpdate.name_company,
        company_field: this.experienceUpdate.company_field,
        occupied_job: this.experienceUpdate.occupied_job,
        years: this.experienceUpdate.years,
        months: this.experienceUpdate.months,
      };
      axios
        .put("/edit-experience/" + this.experienceUpdate.id, payload)
        .then((response) => {
          this.$swal("Sucesso!", "Os dados foram atualizados", "success");
          $("#edit-experience").modal("hide");
          this.getData();
        })
        .catch((error) => {});
    },

    deleteExperience(experience) {
      this.$swal({
        title: "Deletar informação?",
        text: "Se apagado o mesmo não podera ser recuperado!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Sim, Apagar agora!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios
            .delete("/delete-experience/" + experience)
            .then((response) => {
              this.$swal("Sucesso!", "Curso deletado", "success");
              this.getData();
            })
            .catch((error) => {
              this.$swal("Ops...!", "Erro ao apagar", "error");
            });
        }
      });
    },

    openModalCourse(course) {
      axios
        .get("/get-course/" + course)
        .then((response) => {
          this.courseUpdate = response.data.course;
          $("#edit-course").modal("show");
        })
        .catch((error) => {});
    },

    editCourse() {
      let payload = {
        name_courses: this.courseUpdate.name_courses,
        school: this.courseUpdate.school,
        hours: this.courseUpdate.hours,
      };

      axios
        .put("/edit-course/" + this.courseUpdate.id, payload)
        .then((response) => {
          this.$swal("Sucesso!", "Os dados foram atualizados", "success");
          $("#edit-course").modal("hide");
          this.getData();
        })
        .catch((error) => {});
    },

    deleteCourse(course) {
      this.$swal({
        title: "Deletar informação?",
        text: "Se apagado o mesmo não podera ser recuperado!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Sim, Apagar agora!",
      }).then((result) => {
        if (result.isConfirmed) {
          axios
            .delete("/delete-course/" + course)
            .then((response) => {
              this.$swal("Sucesso!", "Experiência deletada", "success");
              this.getData();
            })
            .catch((error) => {
              this.$swal("Ops...!", "Erro ao apagar", "error");
            });
        }
      });
    },

    openModalExperienceCreate() {
      $("#create-experience").modal("show");
    },

    createExperience() {
      if (
        this.newExperience.name_company === null ||
        this.newExperience.company_field === null ||
        this.newExperience.occupied_job === null ||
        this.newExperience.years === null ||
        this.newExperience.months === null
      ) {
        this.$swal({
          toast: true,
          position: "bottom-end",
          timerProgressBar: false,
          icon: "error",
          timer: 5000,
          title: "Os campos precisam ser todos preenchidos!",
          showConfirmButton: false,
          cancelButtonText: "ok",
          allowEscapeKey: true,
        });
      } else {
        let payload = {
          name_company: this.newExperience.name_company,
          company_field: this.newExperience.company_field,
          occupied_job: this.newExperience.occupied_job,
          years: this.newExperience.years,
          months: this.newExperience.months,
        };

        axios
          .post("/create-new-experience", payload)
          .then((response) => {
            this.$swal("Sucesso!", "Experiência cadastrada", "success");
            this.getData();
            this.clear();
            $("#create-experience").modal("hide");
          })
          .catch((error) => {});
      }
    },

    openModalCourseCreate() {
      $("#create-course").modal("show");
    },

    createCourse() {
      if (
        this.newCourse.name_courses === null ||
        this.newCourse.school === null ||
        this.newCourse.hours === null
      ) {
        this.$swal({
          toast: true,
          position: "bottom-end",
          timerProgressBar: false,
          icon: "error",
          timer: 5000,
          title: "Os campos precisam ser todos preenchidos!",
          showConfirmButton: false,
          cancelButtonText: "ok",
          allowEscapeKey: true,
        });
      } else {
        let payload = {
          name_courses: this.newCourse.name_courses,
          school: this.newCourse.school,
          hours: this.newCourse.hours,
        };

        axios
          .post("/create-new-course", payload)
          .then((response) => {
            this.$swal("Sucesso!", "Curso cadastrado", "success");
            this.getData();
            this.clear();
            $("#create-course").modal("hide");
          })
          .catch((error) => {});
      }
    },

    clear() {
      this.newExperience.name_company = null;
      this.newExperience.company_field = null;
      this.newExperience.occupied_job = null;
      this.newExperience.years = null;
      this.newExperience.months = null;

      this.newCourse.name_courses = null;
      this.newExperience.school = null;
      this.newExperience.hours = null;
    },
  },
};
</script>

<style>
.col {
  align-self: self-end !important;
}
</style>
