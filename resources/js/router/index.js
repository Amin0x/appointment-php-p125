import {
    createRouter,
    createWebHistory
} from 'vue-router'
import Home from '../components/home/Home.vue'
import Login from '../components/login/Login.vue'
import Register from '../components/register/Register.vue'
import AppointmentDetails from '../components/appointment_details/AppointmentDetails.vue'
import AppointmentWatcher from '../components/appointment_watcher/AppointmentWatcher.vue'

const routes = [{
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/login',
        name: 'Login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    },
    {
        path: '/appointments/1',
        name: 'appointment.view',
        component: AppointmentDetails
    },
    {
        path: '/appointments/watcher',
        name: 'appointment.whatcher',
        component: AppointmentWatcher
    }
];


const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
