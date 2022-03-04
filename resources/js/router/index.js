import { createRouter, createWebHistory } from 'vue-router'
import Line from '../components/line/line.vue'

const routes = [
    {
        path: '/dashboard',
        name: 'Line.index',
        component: Line
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})
