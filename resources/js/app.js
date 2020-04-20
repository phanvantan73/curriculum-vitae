require('./bootstrap');

import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import App from './App';
import store from './store';
import router from './router';

Vue.use(ElementUI);

const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});