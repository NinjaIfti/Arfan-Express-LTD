<template>
  <section ref="servicesRef" class="relative py-24 overflow-hidden">
    <!-- Logistics Background Image -->
    <div class="absolute inset-0 logistics-background-image"></div>
    
    <!-- Professional Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#1a4a7a]/95 via-[#2a5a8a]/90 to-[#1a4a7a]/95"></div>
    
    <!-- Subtle Pattern Overlay -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, white 2px, transparent 2px), radial-gradient(circle at 75% 75%, white 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <!-- Professional Section Header -->
      <div ref="headerRef" class="text-center mb-20">
        <div ref="titleRef" class="mb-8">
          <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 backdrop-blur-sm rounded-2xl mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
            </svg>
          </div>
          <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 leading-tight">
            Our <span class="text-blue-300">Expertise</span>
          </h2>
          <div class="w-24 h-1 bg-gradient-to-r from-blue-300 to-white mx-auto rounded-full"></div>
        </div>
        <div ref="descriptionRef" class="max-w-3xl mx-auto">
          <p class="text-xl md:text-2xl text-gray-200 leading-relaxed font-light">
            Comprehensive logistics solutions that streamline your supply chain 
            and connect your business to global markets with reliability and efficiency.
          </p>
        </div>
      </div>

      <!-- Professional Services Grid -->
      <div ref="gridRef" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
        <div
          v-for="(service, index) in services"
          :key="service.id"
          :ref="el => serviceCardRefs[index] = el"
          class="group bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-500 hover:scale-105 hover:shadow-2xl"
        >
          <!-- Service Icon -->
          <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-white/20 to-white/10 rounded-xl mb-6 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" v-html="service.iconSvg"></svg>
          </div>

          <!-- Service Content -->
          <div class="space-y-4">
            <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-blue-200 transition-colors duration-300">
              {{ service.title }}
            </h3>
            <p class="text-gray-200 leading-relaxed mb-6">
              {{ service.description }}
            </p>

            <!-- Service Features -->
            <ul class="space-y-2 mb-6">
              <li 
                v-for="feature in service.features" 
                :key="feature"
                class="flex items-center text-sm text-gray-300"
              >
                <svg class="w-4 h-4 text-blue-300 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                {{ feature }}
              </li>
            </ul>

            
          </div>
        </div>
      </div>

      <!-- Professional CTA Section -->
      <div ref="ctaRef" class="text-center">
        <div class="bg-white/10 backdrop-blur-md rounded-3xl p-12 md:p-16 border border-white/20 relative overflow-hidden">
          <!-- CTA Background Pattern -->
          <div class="absolute inset-0 opacity-5">
            <div class="absolute top-4 right-4 w-20 h-20 border-2 border-white rounded-full animate-pulse"></div>
            <div class="absolute bottom-4 left-4 w-16 h-16 border-2 border-white rounded-full animate-pulse" style="animation-delay: 2s;"></div>
          </div>
          
          <div class="relative z-10">
            <h3 class="text-3xl md:text-4xl font-bold text-white mb-4">
              Ready to Optimize Your Supply Chain?
            </h3>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto leading-relaxed">
              Get a free quote today and discover how our logistics expertise 
              can transform your business operations and drive growth.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <router-link 
                ref="primaryCtaBtn"
                to="/contact" 
                class="group bg-white text-[#1a4a7a] px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 relative overflow-hidden shadow-lg hover:shadow-2xl"
              >
                <span class="relative z-10 flex items-center justify-center">
                  Get Free Quote
                  <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                  </svg>
                </span>
              </router-link>
              <router-link 
                ref="secondaryCtaBtn"
                to="/services" 
                class="group bg-transparent border-2 border-white text-white hover:bg-white hover:text-[#1a4a7a] px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105"
              >
                <span class="relative z-10 flex items-center justify-center">
                  View All Services
                  <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                  </svg>
                </span>
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';
import { gsap } from 'gsap';

// Template refs
const servicesRef = ref(null);
const headerRef = ref(null);
const titleRef = ref(null);
const descriptionRef = ref(null);
const gridRef = ref(null);
const ctaRef = ref(null);
const primaryCtaBtn = ref(null);
const secondaryCtaBtn = ref(null);
const serviceCardRefs = ref([]);

// Professional services data with SVG icons
const services = ref([
  {
    id: 1,
    title: 'Global Ocean Freight',
    description: 'Cost-effective sea freight services with flexible options tailored to your specific needs across the globe.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>',
    features: ['Full Container Load (FCL)', 'Less-than-Container Load (LCL)', 'Consolidation Services', 'NVOCC Services'],
    link: '/services/ocean-freight'
  },
  {
    id: 2,
    title: 'Express Air Freight',
    description: 'Fast and reliable air cargo services for time-critical shipments across international borders.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>',
    features: ['Priority Air Cargo', 'Economy Air Freight', 'Charter Services', 'Real-Time Tracking'],
    link: '/services/air-freight'
  },
  {
    id: 3,
    title: 'Road Transport Solutions',
    description: 'Smooth and reliable ground transportation for domestic and cross-border shipments.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM21 17a2 2 0 11-4 0 2 2 0 014 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 17h16v-6a4 4 0 014-4V6a1 1 0 00-1-1H4a1 1 0 00-1 1v11z"/>',
    features: ['Domestic Trucking', 'Less-than-Truckload (LTL)', 'Last-Mile Delivery','24/7 Pickup & Delivery'],
    link: '/services/road-transport'
  },
  {
    id: 4,
    title: 'Customs Brokerage',
    description: 'Expert customs brokerage services ensuring smooth border crossings without unnecessary delays.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
    features: ['Full Customs Clearance', 'Import/Export Documentation', 'Tariff Optimization', 'Compliance Consulting'],
    link: '/services/customs-clearance'
  },
  {
    id: 5,
    title: 'Value-Added Logistics',
    description: 'Specialized services to enhance your supply chain and optimize logistics operations.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>',
    features: ['Warehousing & Distribution', 'Packaging & Labeling', 'Quality Control', 'Risk Management'],
    link: '/services/value-added'
  },
  {
    id: 6,
    title: 'Supply Chain Management',
    description: 'Integrated supply chain management services ensuring efficient operations from sourcing to delivery.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>',
    features: ['Vendor Management', 'Route Optimization', 'Multi-Modal Solutions', 'Advanced Analytics'],
    link: '/services/supply-chain'
  }
]);

const initProfessionalAnimations = () => {
  // Set initial states
  gsap.set([titleRef.value, descriptionRef.value], { opacity: 0, y: 60 });
  gsap.set(serviceCardRefs.value, { opacity: 0, y: 80, scale: 0.9 });
  gsap.set(ctaRef.value, { opacity: 0, y: 100 });

  // Create ScrollTrigger animations
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: servicesRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  });

  tl.to(titleRef.value, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power3.out"
  })
  .to(descriptionRef.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out"
  }, "-=0.5")
  .to(serviceCardRefs.value, {
    opacity: 1,
    y: 0,
    scale: 1,
    duration: 0.8,
    stagger: 0.15,
    ease: "back.out(1.7)"
  }, "-=0.3")
  .to(ctaRef.value, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power2.out"
  }, "-=0.4");

  // Add hover animations for CTA buttons
  if (primaryCtaBtn.value) {
    if (Array.isArray(primaryCtaBtn.value)) {
      primaryCtaBtn.value.forEach(btn => {
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
    } else if (primaryCtaBtn.value instanceof HTMLElement) {
      primaryCtaBtn.value.addEventListener('mouseenter', () => {
        gsap.to(primaryCtaBtn.value, {
          scale: 1.05,
          y: -2,
          duration: 0.3,
          ease: "power2.out"
        });
      });
      primaryCtaBtn.value.addEventListener('mouseleave', () => {
        gsap.to(primaryCtaBtn.value, {
          scale: 1,
          y: 0,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    }
  }

  if (secondaryCtaBtn.value) {
    if (Array.isArray(secondaryCtaBtn.value)) {
      secondaryCtaBtn.value.forEach(btn => {
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
    } else if (secondaryCtaBtn.value instanceof HTMLElement) {
      secondaryCtaBtn.value.addEventListener('mouseenter', () => {
        gsap.to(secondaryCtaBtn.value, {
          scale: 1.05,
          y: -2,
          duration: 0.3,
          ease: "power2.out"
        });
      });
      secondaryCtaBtn.value.addEventListener('mouseleave', () => {
        gsap.to(secondaryCtaBtn.value, {
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
    setTimeout(() => {
      initProfessionalAnimations();
    }, 500);
  });
});
</script>

<style scoped>
/* Logistics Background Image */
.logistics-background-image {
  background-image: url('/images/logistic.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Glass morphism effects */
.backdrop-blur-md {
  backdrop-filter: blur(16px);
}

/* Enhanced hover effects for service cards */
.group:hover {
  transform: translateY(-8px);
}

/* Smooth animations */
.transition-all {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Professional button effects */
.group:hover svg {
  transform: translateX(0.25rem);
}

/* Custom pulse animation */
@keyframes pulse {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}

.animate-pulse {
  animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .logistics-background-image {
    background-position: center center;
  }
}

/* Text shadow for better readability */
.text-white {
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

/* Service card enhancements */
.group:hover .text-blue-200 {
  color: rgb(191 219 254);
}

.group:hover .scale-110 {
  transform: scale(1.1);
}
</style> 