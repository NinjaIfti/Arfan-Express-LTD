<template>
  <section class="logo-slider-section py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
          Trusted by Leading Companies
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
          We partner with industry leaders worldwide to deliver exceptional logistics solutions
        </p>
      </div>

      <!-- Logo Slider -->
      <div class="relative overflow-hidden">
        <div 
          ref="sliderTrack"
          class="flex items-center space-x-16 transition-transform duration-1000 ease-linear"
          :style="{ transform: `translateX(${translateX}px)` }"
        >
          <!-- First set of logos -->
          <div 
            v-for="(logo, index) in logos" 
            :key="`logo-${index}`"
            class="flex-shrink-0 w-32 h-20 flex items-center justify-center bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 grayscale hover:grayscale-0 transition-all"
          >
            <div class="text-center p-4">
              <div class="text-2xl font-bold text-gray-700 mb-1">{{ logo.name }}</div>
              <div class="text-xs text-gray-500">{{ logo.type }}</div>
            </div>
          </div>
          
          <!-- Duplicate set for seamless loop -->
          <div 
            v-for="(logo, index) in logos" 
            :key="`logo-duplicate-${index}`"
            class="flex-shrink-0 w-32 h-20 flex items-center justify-center bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 grayscale hover:grayscale-0 transition-all"
          >
            <div class="text-center p-4">
              <div class="text-2xl font-bold text-gray-700 mb-1">{{ logo.name }}</div>
              <div class="text-xs text-gray-500">{{ logo.type }}</div>
            </div>
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

// Placeholder logos - replace with actual company logos later
const logos = ref([
  { name: 'MAERSK', type: 'Shipping' },
  { name: 'MSC', type: 'Container' },
  { name: 'COSCO', type: 'Maritime' },
  { name: 'CMA CGM', type: 'Logistics' },
  { name: 'HAPAG', type: 'Lloyd' },
  { name: 'EVERGREEN', type: 'Marine' },
  { name: 'ONE', type: 'Ocean Network' },
  { name: 'YANG MING', type: 'Line' },
  { name: 'HMM', type: 'Hyundai' },
  { name: 'PIL', type: 'Pacific' },
  { name: 'OOCL', type: 'Orient' },
  { name: 'ZIM', type: 'Integrated' },
]);

// Animation settings
const slideSpeed = 0.5; // pixels per frame
const logoWidth = 192; // 128px + 64px margin (w-32 + space-x-16)

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
  filter: grayscale(100%);
}

.grayscale:hover {
  filter: grayscale(0%);
}
</style> 