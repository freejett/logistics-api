import Logistic from "./components/Logistic.vue";
import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/',
        component: Logistic
    }
];

const router = createRouter({
    routes,
    history: createWebHistory()
})

export default router;
