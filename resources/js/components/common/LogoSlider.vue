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
            class="flex-shrink-0 w-52 h-70 flex items-center justify-center transition-all duration-300 hover:scale-105 p-6"
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
            class="flex-shrink-0 w-52 h-70 flex items-center justify-center transition-all duration-300 hover:scale-105 p-6"
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
  { name: 'Partner Logo 13', src: '/images/slide/13.png' },
  { name: 'Partner Logo 14', src: '/images/slide/14.png' },
  { name: 'Partner Logo 15', src: '/images/slide/15.png' },
  { name: 'Partner Logo 16', src: '/images/slide/16.png' },
  { name: 'Partner Logo 17', src: '/images/slide/17.png' },
  { name: 'Partner Logo 18', src: '/images/slide/18.png' },
  { name: 'Partner Logo 19', src: '/images/slide/19.png' },
  { name: 'Partner Logo 20', src: '/images/slide/20.png' },
  { name: 'Partner Logo 21', src: '/images/slide/21.png' },
  { name: 'Partner Logo 22', src: '/images/slide/22.png' },
  { name: 'Partner Logo 23', src: '/images/slide/23.png' },
  { name: 'Partner Logo 24', src: '/images/slide/24.png' },
  { name: 'Partner Logo 25', src: '/images/slide/25.png' },
]);

// Animation settings
const slideSpeed = 0.5; // pixels per frame
const logoWidth = 272; // 208px + 64px margin (w-52 + space-x-16)

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

/* Ensure images scale properly */
img {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style> 