

require('./bootstrap');

window.Vue = require('vue');
window.axios.defaults.baseURL ='http://localhost/Vue/api'

// import vue ruter

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import {routes} from './route';

// vuelidate 

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

// use vuex

import Vuex from 'vuex'
Vue.use(Vuex)
import storeData from "./store/category.js"
const store = new Vuex.Store(
storeData
)

// izitoast

import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.css';
Vue.use(VueIziToast);

// using filter
Vue.filter('sortlength',function (text,length,suffix) {
    return text.substring(0,length)+suffix;
})

// vue loading screen

import loading from 'vuejs-loading-screen'

Vue.use(loading)


// vuetify 

import Vuetify from 'vuetify/lib'

Vue.use(Vuetify)

const opts = {}

export default new Vuetify(opts)




Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('search-component', require('./components/searchcomponent.vue').default);
Vue.component('website-component', require('./components/website/websiteComponent.vue').default);

const router = new VueRouter({
  routes, // short for `routes: routes`
  mode:'hash',
})

const app = new Vue({
    el: '#app',
    router,
    store
});
