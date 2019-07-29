import Vue from 'vue'
import App from './App.vue'
import router from './router'
import VeeValidate from 'vee-validate'
import {store} from './store.js'
//import stateMerge from 'vue-object-merge'

Vue.use(VeeValidate);
//Vue.use(store)

Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
