import Vue from "vue";

import VueRouter from "vue-router";
Vue.use(VueRouter);

const Home = require("./../pages/Home.vue").default;
const About = require("./../pages/About.vue").default;
import Notfound from './../pages/NotFound.vue'
import User from './../pages/User.vue'

const routes = [
    {
        name: "Home",
        path: "/home",
        component: Home
    },
    {
        name: "About",
        path: "/about",
        component: About
    },
    {
        name: 'User',
        path: "/user/:name?",
        component: User,
        props: true
    },
    {
        path: "*",
        component: Notfound
    }
];

const router = new VueRouter({
    // routes: routes
    routes,
    linkActiveClass: 'active',
    mode: "history"
});

export default router