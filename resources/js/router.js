import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

let router = new VueRouter({
    // mode: 'history',
    routes:[
        {path:'/',  name:'Landing', component: () =>import('./components/Landing')},
        {path:`/category/post/:id/:name`,  name:'categoryPost', component: () =>import('./components/CategoryPost')},   
        {path:`/category/single/post/:postId/`,  name:'singlePost', component: () =>import('./components/SinglePost')},   
    ]
});

export default router;