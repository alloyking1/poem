
require('./bootstrap');
import Vue from 'vue';
import router from './router.js';
import App from './components/App.vue';


const app = new Vue({
    el: '#app',
    router,
    components:{
        App,
    }
});
