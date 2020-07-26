/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import { routes } from "./routes/routes";
import VueRouter from 'vue-router';
import Vue2Filters from 'vue2-filters';
import moment from 'moment';
import VueCrypt from 'vue-crypt';
import { AlertError, AlertSuccess, Form, HasError } from 'vform';
import VueProgressBar from 'vue-progressbar';

require('./bootstrap');
require("moment/min/locales.min");
moment.locale('fr');

window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(Vue2Filters);
Vue.use(VueCrypt);

const router = new VueRouter({
    routes,
    mode: 'history',
    linkActiveClass: "active"
});

Vue.filter('myDate', function (created) {
    return moment(created).format('ll');
});

Vue.filter('ageDate', function (created) {
    return moment(created).format('l');
});

Vue.filter('formatDate', function (value) {
    if (value) {
        return moment(String(value)).format('DD/MM/YYYY');
    }
});

Vue.filter('formatDateAndHour', function (value) {
    if (value) {
        return moment(String(value)).format('DD/MM/YYYY HH:mm:ss');
    }
});

Vue.filter('dateFormat', function (created) {
    return moment(created).format('lll'); // mars 2 2019, 12:32:56 pm
});

Vue.filter('dateAgo', function (created) {
    return moment(created).fromNow(); // date ago
});

Vue.filter('dateCalendar', function (created) {
    return moment(created).calendar();  // Today at 4:39 PM
});

Vue.filter('toCurrency', function (value) {
    if (typeof value !== "number") {
        return value;
    }
    var formatter = new Intl.NumberFormat('en-US', {
        minimumFractionDigits: 0
    });
    return formatter.format(value);
});

window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
Vue.component(AlertSuccess.name, AlertSuccess);


Vue.use(VueProgressBar, {
    color: 'rgba(209,36,32,1)',
    failedColor: 'red',
    thickness: '4px',
    height: '2px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'top',
    inverse: false
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
