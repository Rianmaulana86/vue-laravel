/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import axios from 'axios'


window.axios = axios;

 window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

 window._ = require('lodash');

 try {
     require('bootstrap');
 } catch (e) {}

 
require('./bootstrap');

import Vue from 'vue';

import VueRouter from 'vue-router';

import Toasted from 'vue-toasted';


Vue.use(Toasted);

Vue.use(VueRouter);

import routes from './router'


Vue.component('navigation', require('./components/Navigation.vue').default);




const index = new Vue({
    el: '#index',

    router: new VueRouter(routes),


});
