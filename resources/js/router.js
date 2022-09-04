import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue'
import About from './pages/About.vue'
import NotFound from './pages/NotFound.vue'
import User from './pages/User.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes: [
        {path: '/home', component: Home, name: 'Home'},
        {path: '/about', component: About, name: 'About'},
        {path: '/user/:username?', component: User, props: true, name: 'User'},

        // Custom error page
        {path: '/:url*', component: NotFound, name: '404'}
    ],
})

export default router
