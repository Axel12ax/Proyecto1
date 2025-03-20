import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import '@fortawesome/vue-fontawesome'
import router from './router'
import './plantilla/css/style.css'
import './plantilla/lib/animate/animate.min.css'




createApp(App).use(router).mount('#app')

