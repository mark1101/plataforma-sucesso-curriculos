/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueTheMask from 'vue-the-mask'
Vue.use(VueTheMask);
import VueSweetalert2 from "vue-sweetalert2";
import "sweetalert2/dist/sweetalert2.min.css";
import Vue from 'vue';
Vue.use(VueSweetalert2);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


//COMPONENT COMPANY
Vue.component('filter-curriculum', require('./components/Company/FilterCurriculum.vue').default);
Vue.component('primary-filter-curriculum', require('./components/Company/PrimaryFilterCurriculum.vue').default);
Vue.component('acess-curriculum', require('./components/Company/AcessCurriculum.vue').default);
Vue.component('company-plans', require('./components/Company/Plans.vue').default);

//COMPONENT CANDIDATE
Vue.component('register-curriculum', require('./components/Candidate/RegisterCurriculum.vue').default);
Vue.component('see-curriculum', require('./components/Candidate/SeeCurriculum').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});