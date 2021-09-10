import { createApp } from 'vue'
// import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

// TIPS import du fichier global de style
// import './assets/scss/main.scss'
// import './assets/scss/Variables.vue'
// import router from './plugins/router.js'

import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';
// import 'bootstrap';
// import 'bootstrap/dist/css/bootstrap.min.css';
// import 'jquery/src/jquery.js';
// import 'bootstrap/dist/js/bootstrap.min.js';

createApp(App).use(store).use(router).mount('#app')

// Vue.config.productionTip = false
// new Vue({
//     router,
//     render: h => h(App)
//   }).$mount('#app')