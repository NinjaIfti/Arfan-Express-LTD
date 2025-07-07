<template>
  <section 
    ref="heroRef" 
    class="relative h-screen flex items-center justify-center overflow-hidden brochure-hero-bg"
  
  >
    <!-- Hero Image Slideshow Background -->
    <div class="absolute inset-0 z-0">
      <div 
        v-for="(image, index) in heroImages" 
        :key="index"
        class="absolute inset-0 hero-slide transition-opacity duration-1000"
        :class="{ 'opacity-100': currentSlide === index, 'opacity-0': currentSlide !== index }"
        :style="{ backgroundImage: `url(${image})` }"
      ></div>
    </div>
    
    <!-- Deep Blue Brochure Gradient Overlay -->
    <div class="absolute inset-0 z-10">
      <div class="w-full h-full bg-gradient-to-br from-[#1a4a7a]/85 via-[#2a5a8a]/70 to-white/30">
        <!-- Animated ocean waves with brochure theme -->
        <div class="absolute inset-0 opacity-10">
          <div 
            v-for="i in 15" 
            :key="`wave-${i}`"
            ref="containerRefs"
            class="absolute w-8 h-4 bg-white/20 rounded-sm wave-animation"
            :style="getContainerStyle(i)"
          ></div>
        </div>
        <!-- Additional deep blue gradient overlay for brochure effect -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a4a7a]/60 via-[#2a5a8a]/40 to-transparent"></div>
      </div>
    </div>
    
    <!-- Premium Ocean Elements -->
    <div class="absolute inset-0 z-20">
      <!-- Subtle premium waves with brochure colors -->
      <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-[#1a4a7a]/15 to-transparent wave-layer-1"></div>
      <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-[#2a5a8a]/10 to-transparent wave-layer-2"></div>
      <div class="absolute bottom-0 left-0 w-full h-12 bg-gradient-to-t from-[#3a6a9a]/8 to-transparent wave-layer-3"></div>
      
      <!-- Premium floating elements with brochure theme -->
      <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white/30 rounded-full premium-float"></div>
      <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-white/25 rounded-full premium-float" style="animation-delay: 2s;"></div>
      <div class="absolute top-2/3 left-1/3 w-1.5 h-1.5 bg-white/20 rounded-full premium-float" style="animation-delay: 4s;"></div>
    </div>

    <!-- Professional Content -->
    <div ref="contentRef" class="relative z-30 text-center text-white px-6 max-w-5xl mx-auto">
      <!-- Company Logo/Name with Professional Theme -->
      <div ref="logoRef" class="mb-12">
        <h1 class="text-6xl md:text-8xl font-bold mb-6 leading-tight">
          <span ref="companyName" class="font-poppins text-white drop-shadow-2xl tracking-tight">
            Arfan Express
          </span>
          <br>
          <span ref="companyType" class="text-4xl md:text-5xl font-inter text-secondary-300 font-light">
            LIMITED
          </span>
        </h1>
        <div ref="underline" class="w-32 h-1.5 bg-gradient-to-r from-secondary-400 to-secondary-500 mx-auto rounded-full shadow-lg"></div>
      </div>

      <!-- Professional Tagline with Typewriter Effect -->
      <div ref="taglineRef" class="mb-12">
        <h2 class="text-2xl md:text-4xl font-inter mb-6 text-white font-light">
          <span ref="typewriterText">{{ safeTagline }}</span>
          <span ref="cursor" class="animate-pulse text-blue-300 font-normal">|</span>
        </h2>
        <p ref="description" class="text-xl md:text-2xl text-gray-200/90 leading-relaxed max-w-4xl mx-auto font-light">
          Leading freight forwarding company delivering innovative logistics solutions 
          that empower businesses to succeed worldwide.
        </p>
      </div>

      <!-- Ocean CTA Buttons -->
      <div ref="ctaRef" class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
        <router-link 
          ref="primaryBtn"
          to="/contact" 
          class="group maritime-button px-10 py-5 rounded-xl font-semibold text-xl transition-all duration-500 transform hover:scale-105 hover:shadow-2xl shadow-lg relative overflow-hidden"
        >
          <span class="relative z-10">Get Free Quote</span>
          <div class="absolute inset-0 bg-gradient-to-r from-white/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </router-link>
        <router-link 
          ref="secondaryBtn"
          to="/services" 
          class="group bg-transparent border-2 border-white/70 text-white hover:bg-white hover:text-[#1a4a7a] px-10 py-5 rounded-xl font-semibold text-xl transition-all duration-500 transform hover:scale-105 backdrop-blur-sm"
        >
          <span class="relative z-10">Our Services</span>
        </router-link>
      </div>

      <!-- Premium Trust Indicators -->
      <div ref="statsRef" class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div ref="stat1" class="group">
          <div class="text-4xl md:text-5xl font-bold text-white mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            <span ref="counter1">15</span>+
          </div>
          <div class="text-base md:text-lg text-gray-300 font-medium">Years Experience</div>
        </div>
        <div ref="stat2" class="group">
          <div class="text-4xl md:text-5xl font-bold text-white mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            <span ref="counter2">100</span>+
          </div>
          <div class="text-base md:text-lg text-gray-300 font-medium">Global Partners</div>
        </div>
        <div ref="stat3" class="group">
          <div class="text-4xl md:text-5xl font-bold text-white mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            <span ref="counter3">50000</span>+
          </div>
          <div class="text-base md:text-lg text-gray-300 font-medium">Successful Shipments</div>
        </div>
        <div ref="stat4" class="group">
          <div class="text-4xl md:text-5xl font-bold text-white mb-2 transition-transform duration-300 group-hover:scale-105 premium-glow">
            24/7
          </div>
          <div class="text-base md:text-lg text-gray-300 font-medium">Global Support</div>
        </div>
      </div>
    </div>

    

    
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted, nextTick, computed } from 'vue';
import { gsap } from 'gsap';

// Template refs
const heroRef = ref(null);
const contentRef = ref(null);
const logoRef = ref(null);
const companyName = ref(null);
const companyType = ref(null);
const underline = ref(null);
const taglineRef = ref(null);
const typewriterText = ref(null);
const cursor = ref(null);
const description = ref(null);
const ctaRef = ref(null);
const primaryBtn = ref(null);
const secondaryBtn = ref(null);
const statsRef = ref(null);
const stat1 = ref(null);
const stat2 = ref(null);
const stat3 = ref(null);
const stat4 = ref(null);
const counter1 = ref(null);
const counter2 = ref(null);
const counter3 = ref(null);
const scrollIndicator = ref(null);
const containerRefs = ref([]);

// Hero slideshow state
const currentSlide = ref(0);
const heroImages = ref([
  '/images/hero.jpg',
  '/images/hero2.jpg'
]);
let slideInterval = null;

// Professional taglines from brochure data
const taglines = [
  "Connecting Global Destinations",
  "Your Trusted Logistics Partner", 
  "Simplifying Global Trade",
  "Delivering Excellence Worldwide",
  "Innovative Freight Solutions",
];

const currentTagline = ref(taglines[0]);
let currentIndex = 0;
let typeInterval = null;
let switchInterval = null;
let masterTimeline = null;

// Ensure text is always readable
const safeTagline = computed(() => {
  return currentTagline.value || taglines[0];
});

const typeWriter = (text, callback) => {
  let i = 0;
  currentTagline.value = '';
  
  const typing = () => {
    if (i < text.length) {
      currentTagline.value += text.charAt(i);
      i++;
      setTimeout(typing, 80);
    } else if (callback) {
      setTimeout(callback, 2000);
    }
  };
  
  setTimeout(typing, 200);
};

const switchTagline = () => {
  if (currentIndex < taglines.length) {
    typeWriter(taglines[currentIndex], () => {
      currentIndex = (currentIndex + 1) % taglines.length;
    });
  }
};

const startSlideshow = () => {
  slideInterval = setInterval(() => {
    currentSlide.value = (currentSlide.value + 1) % heroImages.value.length;
  }, 5000); // Change slide every 5 seconds
};

const stopSlideshow = () => {
  if (slideInterval) {
    clearInterval(slideInterval);
    slideInterval = null;
  }
};

const animateCounters = () => {
  // Counter animations
  gsap.to(counter1.value, {
    innerHTML: 15,
    duration: 2,
    ease: "power2.out",
    snap: { innerHTML: 1 }
  });
  
  gsap.to(counter2.value, {
    innerHTML: 100,
    duration: 2.5,
    ease: "power2.out", 
    snap: { innerHTML: 1 }
  });
  
  gsap.to(counter3.value, {
    innerHTML: 50000,
    duration: 3,
    ease: "power2.out",
    snap: { innerHTML: 1000 }
  });
};

const initProfessionalAnimations = () => {
  // Create master timeline
  masterTimeline = gsap.timeline();
  
  // Set initial states
  gsap.set([companyName.value, companyType.value], { opacity: 0, y: 100, scale: 0.8 });
  gsap.set(underline.value, { scaleX: 0 });
  gsap.set([typewriterText.value, description.value], { opacity: 0, y: 50 });
  gsap.set([primaryBtn.value, secondaryBtn.value], { opacity: 0, y: 80, scale: 0.8 });
  gsap.set([stat1.value, stat2.value, stat3.value, stat4.value], { opacity: 0, y: 60 });
  gsap.set(scrollIndicator.value, { opacity: 0, y: 30 });
  
  // Animate company name with dramatic effect
  masterTimeline
    .to(companyName.value, {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 1.2,
      ease: "back.out(1.7)"
    })
    .to(companyType.value, {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 0.8,
      ease: "back.out(1.4)"
    }, "-=0.6")
    .to(underline.value, {
      scaleX: 1,
      duration: 0.8,
      ease: "power2.out"
    }, "-=0.3")
    .to(typewriterText.value, {
      opacity: 1,
      y: 0,
      duration: 0.6,
      ease: "power2.out"
    }, "+=0.3")
    .to(description.value, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "power2.out"
    }, "-=0.2")
    .to([primaryBtn.value, secondaryBtn.value], {
      opacity: 1,
      y: 0,
      scale: 1,
      duration: 0.8,
      stagger: 0.2,
      ease: "back.out(1.4)"
    }, "-=0.2")
    .to([stat1.value, stat2.value, stat3.value, stat4.value], {
      opacity: 1,
      y: 0,
      duration: 0.6,
      stagger: 0.1,
      ease: "power2.out",
      onComplete: animateCounters
    }, "-=0.3")
    .to(scrollIndicator.value, {
      opacity: 1,
      y: 0,
      duration: 0.5,
      ease: "power2.out"
    }, "-=0.2");

  // Ocean wave animations are handled by CSS

  // Advanced hover effects for buttons
  if (primaryBtn.value) {
    if (Array.isArray(primaryBtn.value)) {
      primaryBtn.value.forEach(btn => {
        if (btn && btn instanceof HTMLElement) {
          btn.addEventListener('mouseenter', () => {
            gsap.to(btn, {
              scale: 1.05,
              y: -2,
              duration: 0.3,
              ease: "power2.out"
            });
          });
          btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
              scale: 1,
              y: 0,
              duration: 0.3,
              ease: "power2.out"
            });
          });
        }
      });
    } else if (primaryBtn.value instanceof HTMLElement) {
      primaryBtn.value.addEventListener('mouseenter', () => {
        gsap.to(primaryBtn.value, {
          scale: 1.05,
          y: -2,
          duration: 0.3,
          ease: "power2.out"
        });
      });
      primaryBtn.value.addEventListener('mouseleave', () => {
        gsap.to(primaryBtn.value, {
          scale: 1,
          y: 0,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    }
  }

  if (secondaryBtn.value) {
    if (Array.isArray(secondaryBtn.value)) {
      secondaryBtn.value.forEach(btn => {
        if (btn && btn instanceof HTMLElement) {
          btn.addEventListener('mouseenter', () => {
            gsap.to(btn, {
              scale: 1.05,
              y: -2,
              duration: 0.3,
              ease: "power2.out"
            });
          });
          btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
              scale: 1,
              y: 0,
              duration: 0.3,
              ease: "power2.out"
            });
          });
        }
      });
    } else if (secondaryBtn.value instanceof HTMLElement) {
      secondaryBtn.value.addEventListener('mouseenter', () => {
        gsap.to(secondaryBtn.value, {
          scale: 1.05,
          y: -2,
          duration: 0.3,
          ease: "power2.out"
        });
      });
      secondaryBtn.value.addEventListener('mouseleave', () => {
        gsap.to(secondaryBtn.value, {
          scale: 1,
          y: 0,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    }
  }
};

const getContainerStyle = (index) => {
  return {
    top: `${Math.random() * 100}%`,
    left: `${Math.random() * 100}%`,
    transform: `rotate(${Math.random() * 45}deg)`,
  };
};

onMounted(() => {
  nextTick(() => {
    // Set initial tagline
    currentTagline.value = taglines[0];
    
    // Start slideshow
    startSlideshow();
    
    // Start typewriter effect with a delay
    setTimeout(() => {
      switchTagline();
      switchInterval = setInterval(switchTagline, 5000);
    }, 2000);
    
    // Start professional animations
    setTimeout(() => {
      initProfessionalAnimations();
    }, 1000);
  });
});

onUnmounted(() => {
  if (switchInterval) {
    clearInterval(switchInterval);
  }
  if (masterTimeline) {
    masterTimeline.kill();
  }
  // Stop slideshow
  stopSlideshow();
});
</script>

<style scoped>
/* Hero Slideshow */
.hero-slide {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Remove old hero background image class */
.hero-background-image {
  background-image: url('/images/hero.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Professional custom animations */
@keyframes float {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  33% { transform: translateY(-20px) rotate(120deg); }
  66% { transform: translateY(-10px) rotate(240deg); }
}

@keyframes drift {
  0%, 100% { transform: translateX(0px) translateY(0px) scale(1); }
  25% { transform: translateX(20px) translateY(-15px) scale(1.1); }
  50% { transform: translateX(-15px) translateY(10px) scale(0.9); }
  75% { transform: translateX(18px) translateY(-8px) scale(1.05); }
}

/* Enhance button hover effects */
.group:hover .relative::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
  transition: left 0.5s;
}

.group:hover .relative::before {
  left: 100%;
}
</style> 