require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import router from './router';
import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);
import HeaderComponent from './header/HeaderComponent';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
Vue.use(Vuetify);

Vue.component('example-component', require('./timeline/TopComponent.vue').default);
Vue.component('header-component', HeaderComponent);

const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify(),
});
