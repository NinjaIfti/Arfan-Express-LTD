<template>
  <header ref="headerRef" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" :class="headerClass">
    <nav class="max-w-7xl mx-auto px-6">
      <div class="flex justify-between items-center h-20">
        <!-- Professional Logo -->
        <router-link 
          ref="logoRef"
          to="/" 
          class="flex items-center space-x-4 group"
        >
          <!-- Company Logo Image -->
          <div class="relative">
            <img 
              :src="logoImage" 
              alt="Arfan Express Limited Logo" 
              class="w-12 h-12 object-contain rounded-xl shadow-xl group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 bg-white p-1"
            />
            <!-- Floating indicator -->
            <div class="absolute -top-1 -right-1 w-4 h-4 bg-blue-400 rounded-full border-2 border-white shadow-lg animate-pulse"></div>
          </div>
          
          <div class="flex flex-col">
            <span class="text-2xl font-bold text-gray-900 font-poppins">
              Arfan Express
            </span>
            <span class="text-xs text-gray-500 font-medium tracking-wider">LIMITED</span>
          </div>
        </router-link>

        <!-- Professional Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-2">
          <router-link 
            v-for="(item, index) in navItems" 
            :key="item.name"
            :ref="el => navRefs[index] = el"
            :to="item.path" 
            class="relative group px-4 py-3 rounded-xl transition-all duration-300 text-gray-700 hover:text-blue-600 font-semibold text-sm uppercase tracking-wider"
            :class="{ 'text-blue-600 bg-blue-50': $route.path === item.path }"
          >
            {{ item.name }}
            <!-- Professional underline animation -->
            <span class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-indigo-500 group-hover:w-8 transition-all duration-300 rounded-full"></span>
            
            <!-- Hover background -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-50 to-indigo-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl -z-10"></div>
          </router-link>
          
          <!-- Professional CTA button -->
          <router-link 
            ref="ctaRef"
            to="/contact"
            class="group ml-6 bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-400 hover:to-indigo-500 text-white px-8 py-3 rounded-xl font-semibold hover:shadow-xl hover:scale-105 transition-all duration-300 border border-blue-500/20 relative overflow-hidden"
          >
            <span class="relative z-10 flex items-center">
              Get Free Quote
              <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
            </span>
            
            <!-- Button background animation -->
            <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </router-link>
        </div>

        <!-- Enhanced Mobile menu button -->
        <button 
          ref="mobileButtonRef"
          @click="toggleMobileMenu" 
          class="lg:hidden relative p-3 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 hover:text-blue-600 transition-all duration-300 group"
        >
          <div class="w-6 h-6 relative">
            <span 
              class="absolute top-1 left-0 w-6 h-0.5 bg-current transition-all duration-300 rounded-full"
              :class="{ 'rotate-45 top-2.5': isMobileMenuOpen }"
            ></span>
            <span 
              class="absolute top-2.5 left-0 w-6 h-0.5 bg-current transition-all duration-300 rounded-full"
              :class="{ 'opacity-0': isMobileMenuOpen }"
            ></span>
            <span 
              class="absolute top-4 left-0 w-6 h-0.5 bg-current transition-all duration-300 rounded-full"
              :class="{ '-rotate-45 top-2.5': isMobileMenuOpen }"
            ></span>
          </div>
        </button>
      </div>

      <!-- Enhanced Mobile Navigation -->
      <transition
        enter-active-class="transition-all duration-500 ease-out"
        enter-from-class="opacity-0 transform -translate-y-8 scale-95"
        enter-to-class="opacity-100 transform translate-y-0 scale-100"
        leave-active-class="transition-all duration-300 ease-in"
        leave-from-class="opacity-100 transform translate-y-0 scale-100"
        leave-to-class="opacity-0 transform -translate-y-8 scale-95"
      >
        <div 
          v-if="isMobileMenuOpen" 
          ref="mobileMenuRef"
          class="lg:hidden py-6 bg-white/95 backdrop-blur-lg border-t border-gray-200 shadow-2xl rounded-b-3xl mx-4"
        >
          <div class="space-y-3">
            <router-link 
              v-for="(item, index) in navItems" 
              :key="item.name"
              :ref="el => mobileNavRefs[index] = el"
              :to="item.path" 
              @click="closeMobileMenu"
              class="block px-6 py-4 text-gray-700 hover:text-blue-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-indigo-50 transition-all duration-300 rounded-xl mx-2 font-semibold relative group"
              :class="{ 'text-blue-600 bg-gradient-to-r from-blue-50 to-indigo-50': $route.path === item.path }"
            >
              <span class="flex items-center">
                <div class="w-2 h-2 bg-blue-500 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                {{ item.name }}
              </span>
            </router-link>
            
            <!-- Enhanced Mobile CTA -->
            <div class="px-4 pt-4">
              <router-link 
                to="/contact"
                @click="closeMobileMenu"
                class="group block w-full text-center bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-400 hover:to-indigo-500 text-white px-8 py-4 rounded-xl font-semibold hover:shadow-xl transition-all duration-300 relative overflow-hidden"
              >
                <span class="relative z-10 flex items-center justify-center">
                  Get Free Quote
                  <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                  </svg>
                </span>
                <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </router-link>
            </div>
          </div>
        </div>
      </transition>
    </nav>
  </header>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted, nextTick } from 'vue';
import { useRoute } from 'vue-router';
import { gsap } from '@/utils/gsap';

// Use public image path
const logoImage = '/images/logo.jpg';

const route = useRoute();
const isScrolled = ref(false);
const isMobileMenuOpen = ref(false);

// Template refs
const headerRef = ref(null);
const logoRef = ref(null);
const ctaRef = ref(null);
const mobileButtonRef = ref(null);
const mobileMenuRef = ref(null);
const navRefs = ref([]);
const mobileNavRefs = ref([]);

// Professional navigation items
const navItems = [
  { name: 'Home', path: '/' },
  { name: 'Services', path: '/services' },
  { name: 'About', path: '/about' },
  { name: 'Contact', path: '/contact' },
];

const headerClass = computed(() => {
  if (isScrolled.value) {
    return 'bg-white/95 backdrop-blur-lg shadow-2xl border-b border-gray-200/50';
  }
  return 'bg-white/90 backdrop-blur-md shadow-lg';
});

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50;
};

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value;
  
  if (isMobileMenuOpen.value) {
    nextTick(() => {
      // Animate mobile menu items in with full GSAP
      gsap.from(mobileNavRefs.value.filter(Boolean), {
        opacity: 0,
        y: 20,
        duration: 0.3,
        stagger: 0.1,
        ease: "power2.out"
      });
    });
  }
};

const closeMobileMenu = () => {
  isMobileMenuOpen.value = false;
};

const initHeaderAnimations = () => {
  // Using full GSAP import - includes all built-in properties like opacity, y, x, scale
  
  // Initial animation for navigation items
  gsap.from(navRefs.value.filter(Boolean), {
    opacity: 0,
    y: -20,
    duration: 0.6,
    stagger: 0.1,
    ease: "power2.out",
    delay: 0.5
  });

  // Logo animation
  if (logoRef.value) {
    gsap.from(logoRef.value, {
      opacity: 0,
      x: -30,
      duration: 0.8,
      ease: "back.out(1.7)",
      delay: 0.2
    });
  }

  // CTA button animation
  if (ctaRef.value) {
    gsap.from(ctaRef.value, {
      opacity: 0,
      scale: 0.8,
      duration: 0.6,
      ease: "back.out(1.7)",
      delay: 0.8
    });
  }

  // Header scroll animation
  if (headerRef.value) {
    gsap.to(headerRef.value, {
      y: 0,
      duration: 0.6,
      ease: "power2.out"
    });
  }
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
  
  nextTick(() => {
    initHeaderAnimations();
  });
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<style scoped>
/* Professional navigation effects */
.router-link-active {
  position: relative;
}

.router-link-active::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 80%;
  height: 2px;
  background: linear-gradient(90deg, #059669, #10b981);
  border-radius: 1px;
  animation: activeNav 2s ease-in-out infinite;
}

@keyframes activeNav {
  0%, 100% {
    opacity: 1;
    transform: translateX(-50%) scaleX(1);
  }
  50% {
    opacity: 0.7;
    transform: translateX(-50%) scaleX(1.1);
  }
}

/* Professional mobile menu backdrop */
.lg\\:hidden + .transition-all {
  backdrop-filter: blur(20px);
}

/* Enhanced hover effects */
.group:hover .group-hover\\:translate-x-1 {
  transform: translateX(0.25rem);
}

.group:hover .group-hover\\:scale-110 {
  transform: scale(1.1);
}

.group:hover .group-hover\\:rotate-3 {
  transform: rotate(3deg) scale(1.1);
}

/* Professional scrollbar for mobile menu */
.lg\\:hidden .space-y-3 {
  scrollbar-width: thin;
  scrollbar-color: rgba(16, 185, 129, 0.3) transparent;
}

.lg\\:hidden .space-y-3::-webkit-scrollbar {
  width: 4px;
}

.lg\\:hidden .space-y-3::-webkit-scrollbar-track {
  background: transparent;
}

.lg\\:hidden .space-y-3::-webkit-scrollbar-thumb {
  background: rgba(16, 185, 129, 0.3);
  border-radius: 2px;
}

/* Mobile specific optimizations */
@media (max-width: 768px) {
  /* Ensure header is properly positioned on mobile */
  header {
    z-index: 9999;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
  }
  
  /* Ensure mobile menu doesn't interfere with content */
  .lg\\:hidden.py-6 {
    max-height: calc(100vh - 80px);
    overflow-y: auto;
  }
  
  /* Optimize logo size for very small screens */
  .w-12.h-12 {
    width: 2.5rem !important;
    height: 2.5rem !important;
  }
  
  .text-2xl {
    font-size: 1.25rem !important;
    line-height: 1.75rem !important;
  }
  
  .text-xs {
    font-size: 0.6rem !important;
  }
}

/* Extra small devices */
@media (max-width: 475px) {
  /* Further optimize header for very small screens */
  .max-w-7xl {
    padding-left: 1rem !important;
    padding-right: 1rem !important;
  }
  
  .h-20 {
    height: 4rem !important; /* Reduce header height */
  }
  
  /* Ensure mobile menu button is easily tappable */
  .lg\\:hidden.p-3 {
    padding: 0.875rem !important;
    min-width: 44px;
    min-height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
}

/* iOS Safari specific header fixes */
@supports (-webkit-touch-callout: none) {
  header {
    /* Ensure header stays at top on iOS */
    position: fixed;
    top: env(safe-area-inset-top, 0px);
  }
}
</style> 