import route from "./route";

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router';
import App from './App';

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',
    router: new VueRouter(route),
    render: h => h(App)
});
