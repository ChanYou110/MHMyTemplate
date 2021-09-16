require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);
import router from './router';

import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);

import HeaderComponent from './header/HeaderComponent';
Vue.component('header-component', HeaderComponent);

import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import  '@mdi/font/css/materialdesignicons.css'
Vue.use(Vuetify);

import CreatePostComponent from './btn/CreatePostComponent';
Vue.component('create-post-component', CreatePostComponent);

const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify(),
});
