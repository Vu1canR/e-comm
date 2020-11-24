/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// require('./js/home.js');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('products-list', require('./components/products.vue').default);
Vue.component('registration', require('./components/registration.vue'));
Vue.component('product', require('./components/product.vue').default);
Vue.component('add-product', require('./components/add-product.vue').default);
Vue.component('cart', require('./components/cart.vue').default);
Vue.component('search', require('./components/search.vue').default);
Vue.component('cart-preview', require('./components/cart-preview.vue').default);
Vue.component('tabs', require('./components/tabs.vue').default);
Vue.component('tab', require('./components/tab.vue').default);
Vue.component('user-profile', require('./components/user-profile.vue').default);
Vue.component('test', require('./components/test.vue').default);
Vue.component('navigation', require('./components/navigation.vue').default);
Vue.component('header-nav', require('./components/header-nav.vue').default);
Vue.component('bestsellers', require('./components/bestsellers.vue').default);
Vue.component('track-order', require('./components/track-order.vue').default);
Vue.component('record-edit', require('./components/record-edit.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});