require('./bootstrap');
window.Vue = require('vue');
import Vue from "vue";
import VueRouter from 'vue-router';
// import BootstrapVue from 'bootstrap-vue';
import App from './component/App.vue';
import Form from "vform";
// import "bootstrap-vue/dist/bootstrap-vue.css";

// Vue.use(BootstrapVue)
Vue.use(VueRouter);

window.Form = Form;

let routes = [
    {path:'/homepage', name:'homepage', component: require('./component/Homepage.vue').default},
  ]
const router = new VueRouter({
    mode: 'history',
    routes: routes,
});
 

const app = new Vue({
	router
}).$mount('#app');