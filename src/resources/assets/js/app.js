import Vue from 'vue'

import App from './layouts/App.vue'
import router from './router'
import store from './store'

Vue.config.productionTip = false

new Vue({
    router,
    store,
    ...App
})