import Vue from 'vue'
import App from './App.vue'

// import Crud from './CRUD.vue'
// CRUD app first project - remember to  render in new Vue Instance

import axios from 'axios'
import Vuex from 'vuex'
import VueAxios from 'vue-axios'
import VueRouter from 'vue-router'

import store from './store'
import router from './router/index.js'

Vue.use(VueAxios, axios)
Vue.use(VueRouter, router)
Vue.use(Vuex)

new Vue({
  el: '#app',
  router,
  store,
  render: h => h(App)
  //render: h => h(Crud)
})
