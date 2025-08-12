<template>
  <div id="app" class="min-h-screen bg-gradient-to-br from-gray-50 to-white relative overflow-x-hidden">
    <!-- Loading Screen -->
    <transition name="loading" appear>
      <div 
        v-if="isLoading" 
        class="fixed inset-0 z-50 bg-gradient-to-br from-primary-900 via-primary-800 to-primary-700 flex items-center justify-center"
      >
        <div class="text-center text-white">
          <div class="relative mb-8">
            <div class="w-20 h-20 border-4 border-secondary-400 border-t-transparent rounded-full animate-spin mx-auto"></div>
            <div class="absolute inset-0 flex items-center justify-center">
              <div class="text-2xl font-bold text-secondary-300">AE</div>
            </div>
          </div>
          <h2 class="text-2xl font-bold mb-2">Arfan Express Limited</h2>
          <p class="text-gray-300 font-light">Connecting Global Destinations</p>
        </div>
      </div>
    </transition>

    <!-- Main App Content -->
    <div v-show="!isLoading" class="min-h-screen flex flex-col">
      <!-- Enhanced Header -->
      <AppHeader />
      
      <!-- Main Content with Page Transitions -->
      <main class="flex-1 relative pt-20">
        <router-view v-slot="{ Component, route }">
          <transition
            :name="transitionName"
            mode="out-in"
            @before-enter="onBeforeEnter"
            @enter="onEnter"
            @leave="onLeave"
          >
            <component :is="Component" :key="route.path" />
          </transition>
        </router-view>
      </main>
      
      <!-- Enhanced Footer -->
      <AppFooter />
      
      <!-- Professional Floating Action Buttons -->
      <FloatingActionButtons />
      
     
    </div>

    <!-- Global Background Pattern -->
    <div class="fixed inset-0 pointer-events-none z-0 opacity-5">
      <div class="absolute top-20 left-10 w-32 h-32 bg-primary-300 rounded-full"></div>
      <div class="absolute bottom-20 right-20 w-48 h-48 bg-secondary-300 rounded-full"></div>
      <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-primary-400 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, watch } from 'vue';
import { useRoute, useRouter } from 'vue-router';
import { gsap } from '@/utils/gsap';
import AppHeader from './components/layout/AppHeader.vue';
import AppFooter from './components/layout/AppFooter.vue';
import FloatingActionButtons from './components/common/FloatingActionButtons.vue';

const route = useRoute();
const router = useRouter();

// Reactive state
const isLoading = ref(true);
const showScrollTop = ref(false);
const transitionName = ref('slide-fade');

// Optimized loading
onMounted(() => {
  // Show loading screen for 2 seconds so users can see the animation
  setTimeout(() => {
    isLoading.value = false;
  }, 2000);

  // Scroll listener for scroll-to-top button
  window.addEventListener('scroll', handleScroll);
  
  // Initialize any global animations
  initGlobalAnimations();
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});

// Watch route changes for dynamic transitions
watch(route, (to, from) => {
  // Determine transition direction based on route hierarchy
  const routeDepths = {
    '/': 0,
    '/about': 1,
    '/services': 1,
    '/contact': 1,
    '/services/:slug': 2
  };
  
  const toDepth = routeDepths[to.path] || 1;
  const fromDepth = routeDepths[from.path] || 1;
  
  transitionName.value = toDepth > fromDepth ? 'slide-left' : 'slide-right';
});

const handleScroll = () => {
  showScrollTop.value = window.scrollY > 300;
};

const scrollToTop = () => {
  gsap.to(window, {
    duration: 1,
    scrollTo: { y: 0 },
    ease: "power2.inOut"
  });
};

const initGlobalAnimations = () => {
  // Optimized subtle animations to background elements
  gsap.to('.fixed .bg-primary-300', {
    rotation: 360,
    duration: 30,
    repeat: -1,
    ease: "none"
  });
  
  gsap.to('.fixed .bg-secondary-300', {
    rotation: -360,
    duration: 35,
    repeat: -1,
    ease: "none"
  });
  
  gsap.to('.fixed .bg-primary-400', {
    scale: 1.1,
    duration: 6,
    repeat: -1,
    yoyo: true,
    ease: "power2.inOut"
  });
};

// Optimized page transition hooks
const onBeforeEnter = (el) => {
  gsap.set(el, { opacity: 0, y: 30 });
};

const onEnter = (el, done) => {
  gsap.to(el, {
    opacity: 1,
    y: 0,
    duration: 0.4,
    ease: "power2.out",
    onComplete: done
  });
};

const onLeave = (el, done) => {
  gsap.to(el, {
    opacity: 0,
    y: -20,
    duration: 0.3,
    ease: "power2.in",
    onComplete: done
  });
};
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap');

/* Global Styles */
* {
  scroll-behavior: smooth;
}

body {
  font-family: 'Inter', sans-serif;
  font-weight: 400;
  line-height: 1.6;
  color: #374151;
  overflow-x: hidden;
}

/* Professional Custom Scrollbar */
::-webkit-scrollbar {
  width: 6px;
}

::-webkit-scrollbar-track {
  background: #f8fafc;
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(180deg, #059669, #10b981);
  border-radius: 3px;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(180deg, #047857, #059669);
}

/* Professional Page Transitions */
.slide-fade-enter-active, .slide-fade-leave-active {
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.slide-fade-enter-from {
  opacity: 0;
  transform: translateY(30px);
}

.slide-fade-leave-to {
  opacity: 0;
  transform: translateY(-30px);
}

.slide-left-enter-active, .slide-left-leave-active {
  transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.slide-left-enter-from {
  opacity: 0;
  transform: translateX(50px);
}

.slide-left-leave-to {
  opacity: 0;
  transform: translateX(-50px);
}

.slide-right-enter-active, .slide-right-leave-active {
  transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.slide-right-enter-from {
  opacity: 0;
  transform: translateX(-50px);
}

.slide-right-leave-to {
  opacity: 0;
  transform: translateX(50px);
}

.loading-enter-active {
  transition: opacity 0.8s ease;
}

.loading-leave-active {
  transition: opacity 0.8s ease;
}

.loading-enter-from,
.loading-leave-to {
  opacity: 0;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s ease;
}

.fade-enter-from, .fade-leave-to {
  opacity: 0;
}

/* Professional Selection Styling */
::selection {
  background: rgba(16, 185, 129, 0.2);
  color: #065f46;
}

/* Enhanced Focus States */
button:focus,
a:focus,
input:focus,
textarea:focus {
  outline: 2px solid #10b981;
  outline-offset: 2px;
}

/* Professional Typography */
h1, h2, h3, h4, h5, h6 {
  font-weight: 700;
  line-height: 1.2;
  letter-spacing: -0.025em;
}

.font-poppins {
  font-family: 'Poppins', sans-serif;
}

/* Professional Button Base Styles */
.btn-base {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  overflow: hidden;
}

.btn-base::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.6s ease;
}

.btn-base:hover::before {
  left: 100%;
}

/* Professional Card Base Styles */
.card-base {
  background: #ffffff;
  border-radius: 1rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  border: 1px solid rgba(229, 231, 235, 0.5);
  transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.card-base:hover {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  transform: translateY(-4px);
}

/* Professional Gradient Text */
.gradient-text {
  background: linear-gradient(135deg, #1e3a8a, #059669);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

/* Loading Animation */
@keyframes pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

.animate-pulse {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

/* Professional animations */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 40px, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

.animate-fadeInUp {
  animation: fadeInUp 0.8s ease-out;
}
</style> 