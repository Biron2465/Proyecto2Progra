import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'

import HomePage from './components/HomePage.vue'
import Testimonial from './components/TestimonialCustomer.vue'
import MicrosoftTeams from './components/MicrosoftTeams.vue'
import AdminControls from './components/AdminControls.vue'
import SignInPage from './components/SignInPage.vue'


import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css';

// Import BootstrapVue3
import BootstrapVue3 from 'bootstrap-vue-3';
import 'bootstrap-icons/font/bootstrap-icons.css';


const routes = [
    { path: '/', component: HomePage},
    { path: '/testimonials', component: Testimonial },
    { path: '/microsoft-teams', component: MicrosoftTeams },
    { path: '/admin-controls', component: AdminControls }, 
    { path: '/sign-in', component: SignInPage }, 
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

const app = createApp(App);

// Make BootstrapVue3 available throughout your project
app.use(BootstrapVue3);
app.use(router);

app.mount('#app');