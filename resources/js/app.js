import './bootstrap';
require('./bootstrap');

Vue.component('registration-form', require('./components/auth/RegistrationForm.vue').default);
Vue.component('login-form', require('./components/auth/LoginForm.vue').default);

const app = new Vue({
    el: '#app',
});

