require("./bootstrap");

window.Vue = require("vue").default;

import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

Vue.component(
    "header-component",
    require("./components/HeaderComponent.vue").default
);
Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);
Vue.component(
    "footer-component",
    require("./components/FooterComponent.vue").default
);

const Home = require("./pages/Home.vue").default;
const About = require("./pages/About.vue").default;
const Notfound = require("./pages/Notfound.vue").default;
// const { default: VueRouter } = require("vue-router");

const routes = [
    {
        path: "/home",
        component: Home
    },
    {
        path: "/about",
        component: About
    },
    {
        path: "*",
        component: Notfound
    }
];

const router = new VueRouter({
    // routes: routes
    mode: "history",
    routes
});

const app = new Vue({
    el: "#app",
    data: {
        title: "Laravel 8"
    },
    router
});
