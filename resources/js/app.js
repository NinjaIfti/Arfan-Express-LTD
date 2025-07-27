import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import { createPinia } from 'pinia';

// Import main App component
import App from './App.vue';

// Import CSS
import '../css/app.css';

// Lazy load pages for better performance
const Home = () => import('./pages/Home.vue');
const About = () => import('./pages/About.vue');
const Contact = () => import('./pages/Contact.vue');
const Services = () => import('./pages/Services.vue');
const ServiceDetail = () => import('./pages/ServiceDetail.vue');
const Tracking = () => import('./pages/Tracking.vue');
const News = () => import('./pages/News.vue');

// Router configuration with lazy loading
const routes = [
    { 
        path: '/', 
        name: 'Home', 
        component: Home,
        meta: { preload: true } // Preload critical route
    },
    { 
        path: '/about', 
        name: 'About', 
        component: About 
    },
    { 
        path: '/contact', 
        name: 'Contact', 
        component: Contact 
    },
    { 
        path: '/services', 
        name: 'Services', 
        component: Services 
    },
    { 
        path: '/services/:type', 
        name: 'ServiceDetail', 
        component: ServiceDetail 
    },
    { 
        path: '/tracking', 
        name: 'Tracking', 
        component: Tracking 
    },
    { 
        path: '/news', 
        name: 'News', 
        component: News 
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return { top: 0, behavior: 'smooth' };
        }
    },
});

// Add loading states for route transitions
router.beforeEach((to, from, next) => {
    // You can add a global loading state here
    next();
});

// Pinia store
const pinia = createPinia();

// Create Vue app
const app = createApp(App);

app.use(router);
app.use(pinia);

// Mount app first
app.mount('#app');

// Dynamically import and initialize AOS only when needed
let aosInitialized = false;
const initAOS = async () => {
    if (!aosInitialized) {
        const AOS = await import('aos');
        await import('aos/dist/aos.css');
        
        AOS.default.init({
            duration: 800,
            once: true,
            offset: 100,
            disable: 'mobile' // Disable on mobile for better performance
        });
        
        aosInitialized = true;
        
        // Refresh AOS on route changes
        router.afterEach(() => {
            setTimeout(() => {
                AOS.default.refresh();
            }, 300);
        });
    }
};

// Initialize AOS after app mount with delay
setTimeout(initAOS, 1000);
