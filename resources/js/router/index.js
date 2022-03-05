import { createRouter, createWebHistory } from 'vue-router'
import Home from '../components/home/Home.vue'

const routes = [
    {
        path: '/',
        name: 'Home.index',
        component: Home
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
