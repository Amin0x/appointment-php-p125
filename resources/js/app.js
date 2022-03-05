require('./bootstrap');
import { createApp } from 'vue'
import Home from './components/home/Home.vue'

// const app = createApp({})

// app.component('Home', Home)

// app.mount('#app')

createApp(Home).mount('#app');
