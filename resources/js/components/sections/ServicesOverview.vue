<template>
  <section ref="servicesRef" class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-gray-100 relative overflow-hidden">
    <!-- Premium Background Pattern -->
    <div class="absolute inset-0 opacity-5">
      <div class="absolute top-20 left-10 w-32 h-32 bg-blue-200 rounded-full premium-float"></div>
      <div class="absolute bottom-20 right-10 w-48 h-48 bg-blue-100 rounded-full premium-float" style="animation-delay: 2s;"></div>
      <div class="absolute top-1/2 left-1/2 w-24 h-24 bg-blue-300 rounded-full transform -translate-x-1/2 -translate-y-1/2 premium-float" style="animation-delay: 4s;"></div>
    </div>

    <div class="container mx-auto px-6 relative">
      <!-- Premium Section Header -->
      <div ref="headerRef" class="text-center mb-20">
        <div ref="titleRef" class="mb-6">
          <span class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-2 block">Our Expertise</span>
          <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-4 leading-tight">
            Comprehensive <span class="text-blue-600">Logistics</span>
            <br class="hidden md:block">
            Solutions
          </h2>
        </div>
        <div ref="descriptionRef" class="max-w-3xl mx-auto">
          <p class="text-xl md:text-2xl text-gray-600 leading-relaxed font-light">
            From sea to air to land, we deliver innovative freight forwarding solutions 
            that streamline your supply chain and connect your business to global markets.
          </p>
        </div>
      </div>

      <!-- Professional Services Grid -->
      <div ref="gridRef" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
        <ServiceCard
          v-for="(service, index) in services"
          :key="service.id"
          :service="service"
          :ref="el => serviceCardRefs[index] = el"
          class="transform transition-all duration-500 hover:scale-105"
        />
      </div>

      <!-- Premium CTA Section -->
      <div ref="ctaRef" class="text-center">
        <div class="bg-gradient-to-r from-blue-900 to-blue-800 rounded-3xl p-12 md:p-16 text-white relative overflow-hidden shadow-2xl">
          <!-- CTA Background Pattern -->
          <div class="absolute inset-0 opacity-5">
            <div class="absolute top-4 right-4 w-20 h-20 border-2 border-white rounded-full premium-float"></div>
            <div class="absolute bottom-4 left-4 w-16 h-16 border-2 border-white rounded-full premium-float" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/3 w-12 h-12 border border-white rounded-full premium-float" style="animation-delay: 4s;"></div>
          </div>
          
          <div class="relative z-10">
            <h3 class="text-3xl md:text-4xl font-bold mb-4">Ready to Optimize Your Supply Chain?</h3>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
              Get a free quote today and discover how our logistics expertise can transform your business operations.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <router-link 
                ref="primaryCtaBtn"
                to="/contact" 
                class="group bg-white text-blue-900 px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 relative overflow-hidden shadow-lg"
              >
                <span class="relative z-10">Get Free Quote</span>
                <div class="absolute inset-0 bg-gradient-to-r from-blue-50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </router-link>
              <router-link 
                ref="secondaryCtaBtn"
                to="/services" 
                class="group bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-900 px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105"
              >
                <span class="relative z-10 flex items-center">
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
import ServiceCard from '../common/ServiceCard.vue';

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

// Real services data from Arfan Express brochure
const services = ref([
  {
    id: 1,
    title: 'Global Ocean Freight',
    description: 'Cost-effective sea freight services with flexible options tailored to your specific needs across the globe.',
    icon: '🚢',
    features: ['Full Container Load (FCL)', 'Less-than-Container Load (LCL)', 'Consolidation Services', 'NVOCC Services'],
    link: '/services/ocean-freight',
    color: 'blue',
    gradient: 'from-blue-500 to-blue-600'
  },
  {
    id: 2,
    title: 'Express Air Freight',
    description: 'Fast and reliable air cargo services for time-critical shipments across international borders.',
    icon: '✈️',
    features: ['Priority Air Cargo', 'Economy Air Freight', 'Charter Services', 'Real-Time Tracking'],
    link: '/services/air-freight',
    color: 'green',
    gradient: 'from-green-500 to-green-600'
  },
  {
    id: 3,
    title: 'Road Transport Solutions',
    description: 'Smooth and reliable ground transportation for domestic and cross-border shipments.',
    icon: '🚛',
    features: ['Domestic Trucking', 'Cross-Border Trucking', 'Less-than-Truckload (LTL)', 'Last-Mile Delivery'],
    link: '/services/road-transport',
    color: 'yellow',
    gradient: 'from-yellow-500 to-orange-500'
  },
  {
    id: 4,
    title: 'Customs Brokerage',
    description: 'Expert customs brokerage services ensuring smooth border crossings without unnecessary delays.',
    icon: '📋',
    features: ['Full Customs Clearance', 'Import/Export Documentation', 'Tariff Optimization', 'Compliance Consulting'],
    link: '/services/customs-clearance',
    color: 'purple',
    gradient: 'from-purple-500 to-purple-600'
  },
  {
    id: 5,
    title: 'Value-Added Logistics',
    description: 'Specialized services to enhance your supply chain and optimize logistics operations.',
    icon: '📦',
    features: ['Warehousing & Distribution', 'Packaging & Labeling', 'Quality Control', 'Risk Management'],
    link: '/services/value-added',
    color: 'red',
    gradient: 'from-red-500 to-red-600'
  },
  {
    id: 6,
    title: 'Supply Chain Management',
    description: 'Integrated supply chain management services ensuring efficient operations from sourcing to delivery.',
    icon: '⚙️',
    features: ['Vendor Management', 'Route Optimization', 'Multi-Modal Solutions', 'Advanced Analytics'],
    link: '/services/supply-chain',
    color: 'indigo',
    gradient: 'from-indigo-500 to-indigo-600'
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
/* Enhanced hover effects */
.group:hover .relative::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
  transition: left 0.6s;
}

.group:hover .relative::before {
  left: 100%;
}
</style> 