import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './pages/Home.vue'
import About from './pages/About.vue'
import NotFound from './pages/NotFound.vue'
import User from './pages/User.vue'
import UserAxios from './pages/UserAxios.vue'
import UserFetch from './pages/UserFetch.vue'
import Users from './pages/Users.vue'
import Profile from './pages/Profile.vue'
import Register from './pages/Register.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    linkActiveClass: 'active',
    routes: [
        { path: '/home', component: Home, name: 'Home' },
        { path: '/about', component: About, name: 'About' },
        { path: '/user/:username?', component: User, name: 'User', props: true },
        { path: '/user-axios/:id?', component: UserAxios, name: 'UserAxios', props: true },
        { path: '/user-fetch/:id?', component: UserFetch, name: 'UserFetch', props: true },
        { path: '/users', component: Users, name: 'Users' },
        { path: '/users/:id', component: Profile, name: 'Profile', props: true },
        { path: '/register', component: Register, name: 'Register' },

        // Custom error page
        { path: '/:url*', component: NotFound, name: '404'}
    ],
})

export default router
