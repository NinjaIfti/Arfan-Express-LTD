import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import { createPinia } from 'pinia';

// Import main App component
import App from './App.vue';

// Import pages
import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Contact from './pages/Contact.vue';
import Services from './pages/Services.vue';
import ServiceDetail from './pages/ServiceDetail.vue';
import Tracking from './pages/Tracking.vue';
import News from './pages/News.vue';

// Import CSS
import '../css/app.css';

// Import AOS for animations
import AOS from 'aos';
import 'aos/dist/aos.css';

// Router configuration
const routes = [
    { path: '/', name: 'Home', component: Home },
    { path: '/about', name: 'About', component: About },
    { path: '/contact', name: 'Contact', component: Contact },
    { path: '/services', name: 'Services', component: Services },
    { path: '/services/:type', name: 'ServiceDetail', component: ServiceDetail },
    { path: '/tracking', name: 'Tracking', component: Tracking },
    { path: '/news', name: 'News', component: News },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return { top: 0 };
        }
    },
});

// Pinia store
const pinia = createPinia();

// Create Vue app
const app = createApp(App);

app.use(router);
app.use(pinia);

// Mount app first
app.mount('#app');

// Initialize AOS
AOS.init({
    duration: 1000,
    once: true,
});

// Refresh AOS on every route change
router.afterEach(() => {
    setTimeout(() => {
        AOS.refresh();
    }, 400);
});
