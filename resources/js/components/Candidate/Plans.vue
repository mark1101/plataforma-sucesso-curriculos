<template>
  <div>
    <div class="container">
      <div class="pb-5 pt-5">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="pricing__single__card">
              <div class="pricing__card__body">
                <div class="pricing__card__title">
                  <p>plano</p>
                  <h5>Mensal</h5>
                </div>
                <hr />
                <div class="pricing__card__price">
                  <div class="rate--count">1x</div>
                  <span>R$<b>15</b>,90</span>
                </div>
                <div class="p">ou seja <b> R$0,53/dia</b></div>
                <hr />
                <div class="validity__text">Vigência de 30 dias</div>
              </div>
              <div class="pricing__card__bottom" v-if="verifyPlan(1)">
                <a style="color: white">Plano atual</a>
              </div>
              <div class="pricing__card__bottom" v-else>
                <a href="#" @click="alterPlan(1)">Escolher Plano</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="pricing__single__card card-sky-blue">
              <div class="pricing__card__body">
                <div class="b-1">
                  <img src="img/b-1.svg" alt="" />
                </div>
                <div class="pricing__card__title">
                  <p>plano</p>
                  <h5>Trimestral</h5>
                </div>
                <hr />
                <div class="pricing__card__price">
                  <div class="rate--count">3x</div>
                  <span>R$<b>12</b>,90</span>
                </div>
                <div class="p">ou seja <b> R$0,43/dia</b></div>
                <hr />
                <div class="validity__text">Vigência de 90 dias</div>
              </div>
              <div class="pricing__card__bottom" v-if="verifyPlan(2)">
                <a style="color: white">Plano atual</a>
              </div>
              <div class="pricing__card__bottom" v-else>
                <a href="#" @click="alterPlan(2)">Escolher Plano</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="pricing__single__card card-sky">
              <div class="b-1">
                <img src="img/b-2.svg" alt="" />
              </div>
              <div class="pricing__card__body">
                <div class="pricing__card__title">
                  <p>plano</p>
                  <h5>semestral</h5>
                </div>
                <hr />
                <div class="pricing__card__price">
                  <div class="rate--count">6x</div>
                  <span>R$<b>9</b>,90</span>
                </div>
                <div class="p">ou seja <b> R$0,33/dia</b></div>
                <hr />
                <div class="validity__text">Vigência de 180 dias</div>
              </div>
              <div class="pricing__card__bottom" v-if="verifyPlan(3)">
                <a style="color: white">Plano atual</a>
              </div>
              <div class="pricing__card__bottom" v-else>
                <a href="#" @click="alterPlan(3)">Escolher Plano</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "candidate-plans.vue",

  data() {
    return {
      candidade: [],
      candidatePlan: [],
      plan: [],
    };
  },

  mounted() {
    this.getData();
  },

  methods: {
    getData() {
      axios
        .get("/candidade-get-data")
        .then((response) => {
          this.candidade = response.data.candidade;
          this.candidatePlan = response.data.candidatePlan;
          this.plan = response.data.plan;
        })
        .catch((error) => {});
    },

    alterPlan(plan) {
      axios
        .get("/candidate-alter-plan/" + plan)
        .then((response) => {
          if (response.data.status == "success") {
            this.$swal("Sucesso!", response.data.message, "success");
            this.getData();
          } else {
            this.$swal("Ops...!", response.data.message, "error");
          }
        })
        .catch((error) => {
          this.$swal("Ops...!", "Algo deu errado com sua requisição ", "error");
        });
    },

    verifyPlan(plan) {
      if (plan === this.candidatePlan.plan_id) {
        return true;
      } else {
        return false;
      }
    },
  },
};
</script>

<style>
</style>