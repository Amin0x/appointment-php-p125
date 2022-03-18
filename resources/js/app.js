require('./bootstrap');
import { createApp } from 'vue'
import router from './router'
//import Home from './components/home/Home.vue'
import AppMain from './AppMain.vue'


// const app = createApp({})

// app.component('Home', Home)

// app.mount('#app')


createApp(AppMain).use(router).mount('#app');
