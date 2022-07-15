<template>
  <div>
    <section class="hero__area">
      <div class="hero-shape-2">
        <img src="img/shapes/shape-3.png" alt="" />
      </div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12">
            <div class="pricing__wrapper bg-transparent">
              <div class="row g-5">
                <div class="col-md-4 col-sm-6">
                  <div class="pricing__single__card pricing--card--big">
                    <div class="pricing__card__body">
                      <div class="pricing__card__title">
                        <p>Pacote</p>
                        <h5>gratuito</h5>
                      </div>
                      <hr />
                      <div class="text">
                        Baixe apenas currículos de candidatos <br />
                        <b>sem experiência</b>
                      </div>
                      <div class="pricing__card__price">
                        <h3>
                          100% <br />
                          grátis
                        </h3>
                      </div>
                      <hr />
                      <div class="validity__text">30 currículos</div>
                    </div>
                    <div class="pricing__card__bottom" v-if="validPlan(1)">
                      <a style="cursor: pointer; color: white"> Plano atual</a>
                    </div>
                    <div class="pricing__card__bottom" v-else>
                      <a style="cursor: pointer" @click="alterPlan(1)">
                        comprar agora</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div
                    class="pricing__single__card card-red pricing--card--big"
                  >
                    <div class="pricing__card__body">
                      <div class="pricing__card__title">
                        <p>Pacote</p>
                        <h5>básico</h5>
                      </div>
                      <hr />
                      <div class="text">
                        Baixe currículos de candidatos
                        <b class="text-red">qualificados</b>
                        <b>e com experiência</b>
                      </div>
                      <div class="pricing__card__price">
                        <span>R$<b>69</b>,90</span>
                        <div class="discount--text">r$6,99 por currículo</div>
                      </div>
                      <hr />
                      <div class="validity__text">10 currículos</div>
                    </div>
                    <div class="pricing__card__bottom" v-if="validPlan(2)">
                      <a style="cursor: pointer; color: white"> Plano atual</a>
                    </div>
                    <div class="pricing__card__bottom" v-else>
                      <a
                        style="cursor: pointer; color: white"
                        @click="alterPlan(2)"
                      >
                        comprar agora</a
                      >
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div
                    class="pricing__single__card card-red pricing--card--big"
                  >
                    <div class="discount-badge">
                      <img src="img/discount-badge.png" alt="" />
                    </div>
                    <div class="pricing__card__body">
                      <div class="pricing__card__title">
                        <p>Pacote</p>
                        <h5>premium</h5>
                      </div>
                      <hr />
                      <div class="text">
                        Baixe currículos de candidatos
                        <b class="text-red">qualificados</b>
                        <b>e com experiência</b>
                      </div>
                      <div class="pricing__card__price">
                        <span>R$<b>99</b>,90</span>
                        <div class="discount--text">r$3,30 por currículo</div>
                      </div>
                      <hr />
                      <div class="validity__text">30 currículos</div>
                    </div>
                    <div class="pricing__card__bottom" v-if="validPlan(3)">
                      <a style="cursor: pointer; color: white" > Plano atual</a>
                    </div>
                    <div class="pricing__card__bottom" v-else>
                      <a
                        style="cursor: pointer; color: white"
                        @click="alterPlan(3)"
                      >
                        comprar agora</a
                      >
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
</template>

<script>
export default {
  name: "company-plans.vue",

  data() {
    return {
      company: [],
      plan: [],
      value: 0,
    };
  },

  created() {
    this.getData();
  },

  methods: {
    getData() {
      axios
        .get("/get-data-company-user")
        .then((response) => {
          this.company = response.data.company;
          this.plan = response.data.plan;
        })
        .catch((error) => {});
    },

    validPlan(plan) {
      if (plan == this.plan.id) return true;
      return false;
    },

    alterPlan(plan) {
      axios
        .get("/alter-plan-company/" + plan)
        .then((response) => {
          if (response.data.status == "success") {
            this.$swal(
              "Sucesso!",
              "Seu plano foi alterado com sucesso",
              "success"
            );
            this.getData();
          } else {
            this.$swal("Ops..", response.data.message, "warning");
          }
        })
        .catch((error) => {
          this.$swal("Opss..!", "Algo de errado", "error");
        });
    },
  },
};
</script>

<style>
</style>