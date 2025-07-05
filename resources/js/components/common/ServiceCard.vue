<template>
  <div ref="cardRef" class="service-card group h-full">
    <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-2 overflow-hidden h-full relative border border-gray-100">
      <!-- Premium Gradient Top Border -->
      <div :class="`w-full h-1 bg-gradient-to-r ${service.gradient || 'from-blue-600 to-blue-700'}`"></div>
      
      <!-- Card Header -->
      <div class="p-8 relative">
        <!-- Premium Background Pattern -->
        <div class="absolute top-4 right-4 opacity-3">
          <div class="w-16 h-16 border border-gray-200 rounded-full premium-float"></div>
        </div>
        
        <!-- Icon with Premium Animation -->
        <div class="relative mb-6">
          <div 
            ref="iconRef"
            class="text-7xl mb-4 transition-all duration-700 group-hover:scale-110 group-hover:rotate-6 relative z-10"
            :style="{ filter: 'drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1))' }"
          >
            {{ service.icon }}
          </div>
          <!-- Icon Background Circle -->
          <div 
            class="absolute top-0 left-0 w-20 h-20 rounded-full opacity-0 group-hover:opacity-10 transition-all duration-500 transform scale-75 group-hover:scale-100"
            :class="`bg-gradient-to-r ${service.gradient || 'from-blue-600 to-blue-700'}`"
          ></div>
        </div>
        
        <!-- Title with Premium Gradient Text -->
        <h3 class="text-2xl font-bold mb-4 transition-all duration-500 group-hover:text-blue-600 text-gray-800">
          {{ service.title }}
        </h3>
        
        <!-- Description -->
        <p class="text-gray-600 mb-6 leading-relaxed text-base font-light">
          {{ service.description }}
        </p>

        <!-- Premium Features List -->
        <div class="space-y-3 mb-8">
          <div 
            v-for="(feature, index) in service.features" 
            :key="feature"
            :ref="el => featureRefs[index] = el"
            class="flex items-center text-sm text-gray-700 opacity-0 transform translate-x-4 transition-all duration-500"
            :style="{ transitionDelay: `${index * 100}ms` }"
          >
            <div 
              class="w-6 h-6 rounded-full flex items-center justify-center mr-3 flex-shrink-0 transition-all duration-300"
              :class="`bg-gradient-to-r ${service.gradient || 'from-blue-600 to-blue-700'}`"
            >
              <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
              </svg>
            </div>
            <span class="font-medium">{{ feature }}</span>
          </div>
        </div>
      </div>

      <!-- Professional Card Footer -->
      <div class="px-8 pb-8">
        <router-link 
          :to="service.link"
          ref="buttonRef"
          class="group/btn relative inline-flex items-center justify-center w-full text-white px-6 py-4 rounded-xl font-semibold transition-all duration-500 transform hover:scale-105 overflow-hidden shadow-lg"
          :class="`bg-gradient-to-r ${service.gradient || 'from-blue-600 to-blue-700'} hover:from-blue-700 hover:to-blue-800`"
        >
          <!-- Button Background Animation -->
          <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
          
          <span class="relative z-10 flex items-center">
            Learn More
            <svg class="ml-2 w-5 h-5 transition-transform duration-300 group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
          </span>
        </router-link>
      </div>

      <!-- Premium Hover Overlay with Gradient -->
      <div 
        class="absolute inset-0 opacity-0 group-hover:opacity-5 transition-all duration-700 pointer-events-none"
        :class="`bg-gradient-to-br ${service.gradient || 'from-blue-600 to-blue-700'}`"
      ></div>
      
      <!-- Premium Corner Decoration -->
      <div class="absolute bottom-0 right-0 w-20 h-20 opacity-3">
        <div 
          class="w-full h-full rounded-tl-full"
          :class="`bg-gradient-to-tl ${service.gradient || 'from-blue-600 to-blue-700'}`"
        ></div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';
import { gsap } from 'gsap';

const props = defineProps({
  service: {
    type: Object,
    required: true
  }
});

// Template refs
const cardRef = ref(null);
const iconRef = ref(null);
const buttonRef = ref(null);
const featureRefs = ref([]);

const initCardAnimations = () => {
  // Animate features on card hover
  if (cardRef.value) {
    if (Array.isArray(cardRef.value)) {
      cardRef.value.forEach(el => {
        if (el && el instanceof HTMLElement) {
          el.addEventListener('mouseenter', () => {
            gsap.to(featureRefs.value, {
              opacity: 1,
              x: 0,
              duration: 0.5,
              stagger: 0.1,
              ease: "power2.out"
            });
            gsap.to(iconRef.value, {
              scale: 1.1,
              rotation: 5,
              duration: 0.6,
              ease: "back.out(1.7)"
            });
          });
          el.addEventListener('mouseleave', () => {
            gsap.to(featureRefs.value, {
              opacity: 0.8,
              x: 0,
              duration: 0.3,
              ease: "power2.out"
            });
            gsap.to(iconRef.value, {
              scale: 1,
              rotation: 0,
              duration: 0.4,
              ease: "power2.out"
            });
          });
        }
      });
    } else if (cardRef.value instanceof HTMLElement) {
      cardRef.value.addEventListener('mouseenter', () => {
        gsap.to(featureRefs.value, {
          opacity: 1,
          x: 0,
          duration: 0.5,
          stagger: 0.1,
          ease: "power2.out"
        });
        gsap.to(iconRef.value, {
          scale: 1.1,
          rotation: 5,
          duration: 0.6,
          ease: "back.out(1.7)"
        });
      });
      cardRef.value.addEventListener('mouseleave', () => {
        gsap.to(featureRefs.value, {
          opacity: 0.8,
          x: 0,
          duration: 0.3,
          ease: "power2.out"
        });
        gsap.to(iconRef.value, {
          scale: 1,
          rotation: 0,
          duration: 0.4,
          ease: "power2.out"
        });
      });
    }
  }

  // Enhanced button hover effect
  if (buttonRef.value) {
    if (Array.isArray(buttonRef.value)) {
      buttonRef.value.forEach(btn => {
        if (btn && btn instanceof HTMLElement) {
          btn.addEventListener('mouseenter', () => {
            gsap.to(btn, {
              scale: 1.02,
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
    } else if (buttonRef.value instanceof HTMLElement) {
      buttonRef.value.addEventListener('mouseenter', () => {
        gsap.to(buttonRef.value, {
          scale: 1.02,
          y: -2,
          duration: 0.3,
          ease: "power2.out"
        });
      });
      buttonRef.value.addEventListener('mouseleave', () => {
        gsap.to(buttonRef.value, {
          scale: 1,
          y: 0,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    }
  }
};

onMounted(() => {
  nextTick(() => {
    initCardAnimations();
  });
});
</script>

<style scoped>
.service-card {
  height: 100%;
}

/* Enhanced hover animations */
.service-card:hover .service-icon {
  animation: float 2s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-8px) rotate(2deg); }
}

/* Professional gradient border animation */
.service-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: 1rem;
  padding: 2px;
  background: linear-gradient(45deg, transparent, rgba(99, 102, 241, 0.1), transparent);
  mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  mask-composite: exclude;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.service-card:hover::before {
  opacity: 1;
}

/* Shimmer effect for buttons */
.group\/btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.7s ease;
}

.group\/btn:hover::before {
  left: 100%;
}
</style> 