import { createApp } from 'vue'
import App from './App.vue'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import '@fortawesome/vue-fontawesome'
import router from './router'
import './plantilla/css/style.css'
import './plantilla/lib/animate/animate.min.css'
import axios from 'axios'
axios.defaults.baseURL = 'http://localhost:8000/api/'




createApp(App).use(router).mount('#app')

