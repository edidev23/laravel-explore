import Vue from "vue";

import VueRouter from "vue-router";
Vue.use(VueRouter);

const Home = require("./../pages/Home.vue").default;
const About = require("./../pages/About.vue").default;
import Notfound from "./../pages/NotFound.vue";
import User from "./../pages/User.vue";
import Detail from "./../pages/Detail.vue";
import Register from "./../pages/Register.vue";

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
        name: "Register",
        path: "/user/create",
        component: Register
    },
    {
        name: "User",
        path: "/user/:id?",
        component: User,
        props: true
    },
    {
        name: "Detail",
        path: "/detail/:id",
        component: Detail,
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
    linkActiveClass: "active",
    mode: "history"
});

export default router;
