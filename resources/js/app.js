import route from "./route";

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router';

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',
    router: new VueRouter(route)
});
