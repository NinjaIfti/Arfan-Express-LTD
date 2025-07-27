<template>
  <section 
    ref="heroRef" 
    class="relative min-h-screen sm:h-screen flex items-center justify-center overflow-hidden brochure-hero-bg"
  >
    <!-- Hero Image Slideshow Background with Lazy Loading -->
    <div class="absolute inset-0 z-0">
      <div 
        v-for="(image, index) in heroImages" 
        :key="index"
        class="absolute inset-0 hero-slide transition-opacity duration-1000"
        :class="{ 'opacity-100': currentSlide === index, 'opacity-0': currentSlide !== index }"
      >
        <img 
          :src="index === 0 ? image : ''"
          :data-src="index > 0 ? image : ''"
          :alt="`Hero background ${index + 1}`"
          class="w-full h-full object-cover lazy-image"
          :class="{ 'lazy': index > 0 }"
          loading="eager"
          decoding="async"
        />
      </div>
    </div>
    
    <!-- Simplified Gradient Overlay -->
    <div class="absolute inset-0 z-10 bg-gradient-to-br from-[#1a4a7a]/85 via-[#2a5a8a]/70 to-white/30">
      <!-- Minimal animated elements -->
        <div class="absolute inset-0 opacity-10">
          <div 
          v-for="i in 3" 
            :key="`wave-${i}`"
          class="absolute w-6 h-3 bg-white/20 rounded-sm simple-float"
          :style="getFloatingStyle(i)"
          ></div>
      </div>
    </div>

    <!-- Professional Content -->
    <div ref="contentRef" class="relative z-30 text-center text-white px-4 sm:px-6 max-w-5xl mx-auto py-8 sm:py-0">
      <!-- Company Logo/Name -->
      <div class="mb-8 sm:mb-12 animate-fade-up">
        <h1 class="text-4xl xs:text-5xl sm:text-6xl md:text-8xl font-bold mb-4 sm:mb-6 leading-tight">
          <span class="font-poppins text-white drop-shadow-2xl tracking-tight block animate-slide-up-delay-1">
            Arfan Express
          </span>
          <br class="hidden xs:block">
          <span class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-inter text-secondary-300 font-light block xs:inline animate-slide-up-delay-2">
            LIMITED
          </span>
        </h1>
        <div class="w-24 sm:w-32 h-1.5 bg-gradient-to-r from-secondary-400 to-secondary-500 mx-auto rounded-full shadow-lg animate-scale-up-delay-3"></div>
      </div>

      <!-- Optimized Tagline with Simple CSS Animation -->
      <div class="mb-8 sm:mb-12 animate-fade-up-delay-4">
        <h2 class="text-lg xs:text-xl sm:text-2xl md:text-4xl font-inter mb-4 sm:mb-6 text-white font-light leading-relaxed">
          <span ref="typewriterText">{{ currentTagline }}</span>
          <span class="animate-pulse text-blue-300 font-normal">|</span>
        </h2>
        <p class="text-base xs:text-lg sm:text-xl md:text-2xl text-gray-200/90 leading-relaxed max-w-4xl mx-auto font-light px-2 sm:px-0">
          Leading freight forwarding company delivering innovative logistics solutions 
          that empower businesses to succeed worldwide.
        </p>
      </div>

      <!-- CTA Buttons -->
      <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center items-center mb-12 sm:mb-16 px-2 sm:px-0 animate-fade-up-delay-5">
        <router-link 
          to="/contact" 
          class="group maritime-button w-full sm:w-auto px-6 sm:px-10 py-4 sm:py-5 rounded-xl font-semibold text-lg sm:text-xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl shadow-lg relative overflow-hidden text-center"
        >
          <span class="relative z-10">Get Free Quote</span>
          <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </router-link>
        <router-link 
          to="/services" 
          class="group bg-transparent border-2 border-white/70 text-white hover:bg-white hover:text-[#1a4a7a] w-full sm:w-auto px-6 sm:px-10 py-4 sm:py-5 rounded-xl font-semibold text-lg sm:text-xl transition-all duration-300 transform hover:scale-105 backdrop-blur-sm text-center"
        >
          <span class="relative z-10">Our Services</span>
        </router-link>
      </div>

      <!-- Trust Indicators with CSS Animations -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-8 text-center px-2 sm:px-0 animate-fade-up-delay-6">
        <div class="group">
          <div class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-1 sm:mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            <span ref="counter1">15</span>+
          </div>
          <div class="text-xs xs:text-sm sm:text-base md:text-lg text-gray-300 font-medium leading-tight">Years Experience</div>
        </div>
        <div class="group">
          <div class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-1 sm:mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            <span ref="counter2">100</span>+
          </div>
          <div class="text-xs xs:text-sm sm:text-base md:text-lg text-gray-300 font-medium leading-tight">Global Partners</div>
        </div>
        <div class="group">
          <div class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-1 sm:mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            <span ref="counter3">50000</span>+
          </div>
          <div class="text-xs xs:text-sm sm:text-base md:text-lg text-gray-300 font-medium leading-tight">Successful Shipments</div>
        </div>
        <div class="group">
          <div class="text-2xl xs:text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-1 sm:mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            24/7
          </div>
          <div class="text-xs xs:text-sm sm:text-base md:text-lg text-gray-300 font-medium leading-tight">Global Support</div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted, nextTick } from 'vue';

// Template refs
const heroRef = ref(null);
const typewriterText = ref(null);
const counter1 = ref(null);
const counter2 = ref(null);
const counter3 = ref(null);

// Hero slideshow state
const currentSlide = ref(0);
const heroImages = ref([
  '/images/hero.jpg',
  '/images/hero2.jpg'
]);
let slideInterval = null;

// Simplified taglines
const taglines = [
  "Connecting Global Destinations",
  "Your Trusted Logistics Partner", 
  "Simplifying Global Trade",
  "Delivering Excellence Worldwide",
];

const currentTagline = ref(taglines[0]);
let currentTaglineIndex = 0;
let typewriterTimeout = null;

// Simplified typewriter effect without requestAnimationFrame
const simpleTypeWriter = (text, onComplete) => {
  let charIndex = 0;
  let currentText = '';
  
  const type = () => {
    if (charIndex < text.length) {
      currentText += text.charAt(charIndex);
      currentTagline.value = currentText;
      charIndex++;
      typewriterTimeout = setTimeout(type, 80);
    } else if (onComplete) {
      typewriterTimeout = setTimeout(onComplete, 2000);
    }
  };
  
  currentText = '';
  currentTagline.value = '';
  charIndex = 0;
  typewriterTimeout = setTimeout(type, 500);
};

const switchTagline = () => {
  const nextText = taglines[currentTaglineIndex];
  simpleTypeWriter(nextText, () => {
    currentTaglineIndex = (currentTaglineIndex + 1) % taglines.length;
    typewriterTimeout = setTimeout(switchTagline, 1000);
  });
};

const startSlideshow = () => {
  slideInterval = setInterval(() => {
    currentSlide.value = (currentSlide.value + 1) % heroImages.value.length;
    lazyLoadImages();
  }, 6000);
};

const stopSlideshow = () => {
  if (slideInterval) {
    clearInterval(slideInterval);
    slideInterval = null;
  }
};

// Lazy load images for better performance
const lazyLoadImages = () => {
  const lazyImages = document.querySelectorAll('.lazy-image.lazy');
  lazyImages.forEach(img => {
    if (img.dataset.src) {
      img.src = img.dataset.src;
      img.classList.remove('lazy');
    }
  });
};

// Simple counter animation with CSS
const animateCounters = () => {
  // Use CSS animations instead of GSAP for better performance
  const counters = [counter1.value, counter2.value, counter3.value];
  const targets = [15, 100, 50000];
  
  counters.forEach((counter, index) => {
    if (counter) {
      let start = 0;
      const end = targets[index];
      const increment = end / 60; // Animate over ~1 second at 60fps
      
      const count = () => {
        start += increment;
        if (start < end) {
          counter.textContent = Math.floor(start);
          requestAnimationFrame(count);
        } else {
          counter.textContent = end;
        }
      };
      
      requestAnimationFrame(count);
    }
  });
};

const getFloatingStyle = (index) => {
  return {
    top: `${20 + (index * 20)}%`,
    left: `${10 + (index * 25)}%`,
    animationDelay: `${index * 0.5}s`,
  };
};

// Cleanup function
const cleanup = () => {
  if (typewriterTimeout) {
    clearTimeout(typewriterTimeout);
    typewriterTimeout = null;
  }
  stopSlideshow();
};

onMounted(() => {
  nextTick(() => {
    startSlideshow();
    
    // Start typewriter effect
    setTimeout(() => {
      switchTagline();
    }, 1000);
    
    // Start counter animations
    setTimeout(() => {
      animateCounters();
    }, 1500);
    
    // Initialize lazy loading for images
    lazyLoadImages();
  });
});

onUnmounted(() => {
  cleanup();
});
</script>

<style scoped>
/* Optimized CSS animations instead of GSAP */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(50px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes scaleUp {
  from {
    opacity: 0;
    transform: scaleX(0);
  }
  to {
    opacity: 1;
    transform: scaleX(1);
  }
}

@keyframes simpleFloat {
  0%, 100% { 
    transform: translateY(0px) rotate(0deg); 
  }
  50% { 
    transform: translateY(-10px) rotate(180deg); 
  }
}

/* Animation classes */
.animate-fade-up {
  animation: fadeUp 0.8s ease-out forwards;
}

.animate-slide-up-delay-1 {
  animation: slideUp 0.6s ease-out 0.2s both;
}

.animate-slide-up-delay-2 {
  animation: slideUp 0.6s ease-out 0.4s both;
}

.animate-scale-up-delay-3 {
  animation: scaleUp 0.6s ease-out 0.6s both;
}

.animate-fade-up-delay-4 {
  animation: fadeUp 0.6s ease-out 0.8s both;
}

.animate-fade-up-delay-5 {
  animation: fadeUp 0.6s ease-out 1s both;
}

.animate-fade-up-delay-6 {
  animation: fadeUp 0.6s ease-out 1.2s both;
}

.simple-float {
  animation: simpleFloat 6s ease-in-out infinite;
}

/* Hero image optimizations */
.hero-slide img {
  will-change: auto;
}

.lazy-image {
  transition: opacity 0.3s ease-in-out;
}

.lazy-image.lazy {
  opacity: 0;
}

/* Mobile-first responsive container */
.brochure-hero-bg {
  min-height: 100vh;
  min-height: 100dvh;
  padding-top: env(safe-area-inset-top, 0px);
  padding-bottom: env(safe-area-inset-bottom, 0px);
}

/* Mobile optimizations */
@media (max-width: 640px) {
  .brochure-hero-bg {
    min-height: 100svh;
    padding-top: max(env(safe-area-inset-top, 0px), 80px);
    padding-bottom: max(env(safe-area-inset-bottom, 0px), 20px);
  }
  
  .relative.z-30 {
    min-height: calc(100vh - 160px);
    min-height: calc(100svh - 160px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
}

/* Extra small devices */
@media (max-width: 475px) {
  .brochure-hero-bg {
    padding-top: max(env(safe-area-inset-top, 0px), 90px);
  }
  
  h1 {
    line-height: 1.1 !important;
  }
  
  h2 {
    line-height: 1.3 !important;
  }
  
  .maritime-button,
  .group.bg-transparent {
    font-size: 1rem !important;
    padding: 0.875rem 1.5rem !important;
  }
}

/* Performance optimizations */
.maritime-button {
  background: linear-gradient(135deg, #059669 0%, #10b981 100%);
}

.premium-glow {
  text-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
}

/* Mobile text overflow protection */
@media (max-width: 640px) {
  .font-poppins,
  .font-inter {
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
  }
  
  .grid.grid-cols-2 > div {
    min-width: 0;
    overflow: hidden;
  }
  
  .grid.grid-cols-2 .text-xs,
  .grid.grid-cols-2 .text-sm {
    font-size: 0.75rem !important;
    line-height: 1.2 !important;
  }
}

/* Landscape phone optimization */
@media (max-height: 500px) and (orientation: landscape) {
  .brochure-hero-bg {
    min-height: 100vh;
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
  
  .relative.z-30 {
    min-height: auto;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
  }
  
  .mb-8,
  .mb-12 {
    margin-bottom: 1rem !important;
  }
  
  .sm\\:mb-12,
  .sm\\:mb-16 {
    margin-bottom: 1rem !important;
  }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
  .simple-float,
  .animate-pulse {
    animation: none;
  }
  
  .animate-fade-up,
  .animate-slide-up-delay-1,
  .animate-slide-up-delay-2,
  .animate-scale-up-delay-3,
  .animate-fade-up-delay-4,
  .animate-fade-up-delay-5,
  .animate-fade-up-delay-6 {
    animation: none;
    opacity: 1;
    transform: none;
  }
}

/* iOS Safari specific fixes */
@supports (-webkit-touch-callout: none) {
  .brochure-hero-bg {
    min-height: -webkit-fill-available;
  }
}
</style> 