<template>
  <section class="logo-slider-section py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
          Trusted by Global Partners
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
          We work with industry leaders worldwide to deliver exceptional logistics solutions
        </p>
      </div>

      <!-- Logo Slider -->
      <div class="relative overflow-hidden" 
           @mouseenter="handleMouseEnter" 
           @mouseleave="handleMouseLeave">
        <!-- Gradient fade on left -->
        <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-gray-50 to-transparent z-10 pointer-events-none"></div>
        
        <!-- Gradient fade on right -->
        <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-gray-50 to-transparent z-10 pointer-events-none"></div>
        
        <div 
          ref="sliderTrack"
          class="flex items-center space-x-16 transition-transform duration-1000 ease-linear"
          :style="{ transform: `translateX(${translateX}px)` }"
        >
          <!-- First set of logos -->
          <div 
            v-for="(logo, index) in logos" 
            :key="`logo-${index}`"
            class="flex-shrink-0 w-40 h-24 flex items-center justify-center bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 grayscale hover:grayscale-0 hover:scale-105 p-4"
          >
            <img 
              :src="logo.src" 
              :alt="logo.name"
              class="max-w-full max-h-full object-contain transition-transform duration-300"
            />
          </div>
          
          <!-- Duplicate set for seamless loop -->
          <div 
            v-for="(logo, index) in logos" 
            :key="`logo-duplicate-${index}`"
            class="flex-shrink-0 w-40 h-24 flex items-center justify-center bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 grayscale hover:grayscale-0 hover:scale-105 p-4"
          >
            <img 
              :src="logo.src" 
              :alt="logo.name"
              class="max-w-full max-h-full object-contain transition-transform duration-300"
            />
          </div>
        </div>
      </div>

      
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

// Logo slider state
const translateX = ref(0);
const currentSlide = ref(0);
const sliderTrack = ref(null);
let animationId = null;

// Partner company logos
const logos = ref([
  { name: 'Partner Logo 1', src: '/images/slide/1.png' },
  { name: 'Partner Logo 2', src: '/images/slide/2.png' },
  { name: 'Partner Logo 3', src: '/images/slide/3.png' },
  { name: 'Partner Logo 4', src: '/images/slide/4.png' },
  { name: 'Partner Logo 5', src: '/images/slide/5.png' },
  { name: 'Partner Logo 6', src: '/images/slide/6.png' },
  { name: 'Partner Logo 7', src: '/images/slide/7.png' },
  { name: 'Partner Logo 8', src: '/images/slide/8.png' },
  { name: 'Partner Logo 9', src: '/images/slide/9.png' },
  { name: 'Partner Logo 10', src: '/images/slide/10.png' },
  { name: 'Partner Logo 11', src: '/images/slide/11.png' },
  { name: 'Partner Logo 12', src: '/images/slide/12.png' },
]);

// Animation settings
const slideSpeed = 0.5; // pixels per frame
const logoWidth = 224; // 160px + 64px margin (w-40 + space-x-16)

const startAnimation = () => {
  const animate = () => {
    translateX.value -= slideSpeed;
    
    // Calculate total width of one set of logos
    const totalWidth = logos.value.length * logoWidth;
    
    // Reset position when first set is completely out of view
    if (Math.abs(translateX.value) >= totalWidth) {
      translateX.value = 0;
    }
    
    // Update current slide indicator
    const slideIndex = Math.floor(Math.abs(translateX.value) / (logoWidth * 3)) % Math.ceil(logos.value.length / 3);
    currentSlide.value = slideIndex;
    
    animationId = requestAnimationFrame(animate);
  };
  
  animationId = requestAnimationFrame(animate);
};

const stopAnimation = () => {
  if (animationId) {
    cancelAnimationFrame(animationId);
    animationId = null;
  }
};

onMounted(() => {
  startAnimation();
});

onUnmounted(() => {
  stopAnimation();
});

// Pause on hover
const handleMouseEnter = () => {
  stopAnimation();
};

const handleMouseLeave = () => {
  startAnimation();
};
</script>

<style scoped>
.logo-slider-section {
  user-select: none;
}

.logo-slider-section:hover .flex {
  animation-play-state: paused;
}

/* Smooth grayscale transition */
.grayscale {
  filter: grayscale(100%) brightness(0.8);
  transition: all 0.3s ease;
}

.grayscale:hover {
  filter: grayscale(0%) brightness(1);
}

/* Ensure images scale properly */
img {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Add subtle box shadow on hover */
.flex-shrink-0:hover {
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}
</style> 