<template>
  <div ref="aboutRef" class="about-page">
    <!-- Professional Hero Section -->
    <section ref="heroRef" class="relative py-24 bg-gradient-to-br from-primary-900 via-primary-800 to-primary-700 text-white overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-32 h-32 border-2 border-white rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 border border-white rounded-full"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 border-2 border-white rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
          <div ref="heroTitle" class="mb-8">
            <span class="text-sm font-semibold text-secondary-300 uppercase tracking-wider mb-2 block">About Our Company</span>
            <h1 class="text-6xl md:text-7xl font-bold mb-6 leading-tight">
              <span class="text-white">Arfan Express</span>
              <br>
              <span class="text-4xl md:text-5xl font-light text-secondary-300">LIMITED</span>
          </h1>
          </div>
          <p ref="heroSubtitle" class="text-2xl md:text-3xl font-light max-w-4xl mx-auto leading-relaxed">
            Leading freight forwarding company dedicated to delivering reliable and cost-efficient logistics services worldwide
          </p>
        </div>
      </div>
    </section>

    <!-- Company Story with Professional Design -->
    <section ref="storyRef" class="py-24 bg-white relative">
      <!-- Subtle Background -->
      <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 right-10 w-64 h-64 bg-primary-300 rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-32 h-32 bg-secondary-300 rounded-full"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
          <div ref="storyContent">
            <div class="mb-8">
              <span class="text-sm font-semibold text-secondary-500 uppercase tracking-wider mb-2 block">Our Journey</span>
              <h2 class="text-5xl md:text-6xl font-bold text-primary-800 mb-6 leading-tight">
                Connecting Global
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary-500 to-secondary-600"> Destinations</span>
              </h2>
            </div>
            <div class="space-y-6 text-lg text-gray-600 leading-relaxed">
              <p class="text-xl font-light">
                Arfan Express Ltd is a leading freight forwarding company dedicated to delivering 
                reliable and cost-efficient logistics services worldwide.
              </p>
              <p>
                With years of experience in the industry, we specialize in sea, air, and road freight, 
                providing end-to-end solutions to streamline your supply chain. Our global network and 
                cutting-edge technology ensure that your cargo reaches its destination on time and without hassle.
              </p>
              <p>
                From small businesses to large enterprises, we've built lasting relationships based on 
                trust, reliability, and exceptional service delivery that addresses our customers' unique pain points.
              </p>
            </div>
          </div>
          <div ref="storyVisual" class="relative">
            <div class="relative">
              <!-- Professional Visual -->
              <div class="bg-gradient-to-br from-primary-600 to-secondary-600 rounded-3xl p-12 text-center text-white shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-700">
                <div class="text-8xl mb-6">🌏</div>
                <h3 class="text-2xl font-bold mb-4">Global Reach</h3>
                <p class="text-lg opacity-90">Connecting businesses across continents</p>
              </div>
              <!-- Floating Stats -->
              <div class="absolute -top-8 -left-8 bg-white rounded-2xl shadow-xl p-6 text-center">
                <div class="text-3xl font-bold text-secondary-500">15+</div>
                <div class="text-sm text-gray-600">Years Experience</div>
                </div>
              <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 text-center">
                <div class="text-3xl font-bold text-primary-600">100+</div>
                <div class="text-sm text-gray-600">Global Partners</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Enhanced Mission, Vision, Values -->
    <section ref="valuesRef" class="py-24 bg-gradient-to-br from-gray-50 to-white relative">
      <div class="container mx-auto px-6">
        <div ref="valuesHeader" class="text-center mb-20">
          <span class="text-sm font-semibold text-secondary-500 uppercase tracking-wider mb-2 block">Our Foundation</span>
          <h2 class="text-5xl md:text-6xl font-bold text-primary-800 mb-6 leading-tight">
            Driving <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary-500 to-secondary-600">Excellence</span>
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto font-light">
            Our values, mission, and vision guide every decision we make and every service we provide
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Mission - Real from brochure -->
          <div ref="missionCard" class="group relative">
            <div class="bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 h-full">
              <div class="text-6xl mb-8 transition-transform duration-500 group-hover:scale-110">🎯</div>
              <h3 class="text-2xl font-bold text-primary-800 mb-6">Our Mission</h3>
              <p class="text-gray-600 leading-relaxed text-lg">
                To simplify global logistics through cost-effective, reliable, and tailored solutions 
                that address our customers' pain points, ensuring timely delivery and seamless operations.
              </p>
              <!-- Gradient Border -->
              <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-gradient-to-r from-primary-500/20 to-secondary-500/20 -z-10"></div>
            </div>
          </div>

          <!-- Vision - Real from brochure -->
          <div ref="visionCard" class="group relative">
            <div class="bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 h-full">
              <div class="text-6xl mb-8 transition-transform duration-500 group-hover:scale-110">🚀</div>
              <h3 class="text-2xl font-bold text-primary-800 mb-6">Our Vision</h3>
              <p class="text-gray-600 leading-relaxed text-lg">
                To be the global leader in freight forwarding, delivering innovative logistics solutions 
                that empower businesses to succeed in the global marketplace.
              </p>
              <!-- Gradient Border -->
              <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-gradient-to-r from-secondary-500/20 to-primary-500/20 -z-10"></div>
            </div>
          </div>

          <!-- Values -->
          <div ref="valuesCard" class="group relative md:col-span-2 lg:col-span-1">
            <div class="bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 h-full">
              <div class="text-6xl mb-8 transition-transform duration-500 group-hover:scale-110">⭐</div>
              <h3 class="text-2xl font-bold text-primary-800 mb-6">Our Values</h3>
              <div class="space-y-3">
                <div class="flex items-center text-gray-600">
                  <div class="w-2 h-2 bg-secondary-500 rounded-full mr-3"></div>
                  <span>Reliability & Trust</span>
                </div>
                <div class="flex items-center text-gray-600">
                  <div class="w-2 h-2 bg-primary-500 rounded-full mr-3"></div>
                  <span>Innovation & Excellence</span>
                </div>
                <div class="flex items-center text-gray-600">
                  <div class="w-2 h-2 bg-secondary-500 rounded-full mr-3"></div>
                  <span>Customer-Centric Approach</span>
                </div>
                <div class="flex items-center text-gray-600">
                  <div class="w-2 h-2 bg-primary-500 rounded-full mr-3"></div>
                  <span>Global Connectivity</span>
                </div>
              </div>
              <!-- Gradient Border -->
              <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-gradient-to-r from-primary-500/20 to-secondary-500/20 -z-10"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Enhanced Why Choose Us Section -->
    <section ref="whyUsRef" class="py-24 bg-white">
      <div class="container mx-auto px-6">
        <div ref="whyUsHeader" class="text-center mb-20">
          <span class="text-sm font-semibold text-secondary-500 uppercase tracking-wider mb-2 block">Why Choose Us</span>
          <h2 class="text-5xl md:text-6xl font-bold text-primary-800 mb-6 leading-tight">
            Unmatched <span class="text-transparent bg-clip-text bg-gradient-to-r from-secondary-500 to-secondary-600">Expertise</span>
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div 
            v-for="(feature, index) in features" 
            :key="feature.id"
            :ref="el => featureRefs[index] = el"
            class="group text-center"
          >
            <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100">
              <div class="text-5xl mb-6 transition-transform duration-500 group-hover:scale-110">{{ feature.icon }}</div>
              <h3 class="text-xl font-bold text-primary-800 mb-4">{{ feature.title }}</h3>
              <p class="text-gray-600 text-sm leading-relaxed">{{ feature.description }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Professional CTA Section -->
    <section ref="ctaRef" class="py-24 bg-gradient-to-r from-primary-800 to-primary-900 text-white relative overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 right-10 w-40 h-40 border-2 border-white rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-24 h-24 border border-white rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 w-32 h-32 border-2 border-white rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
      </div>
      
      <div class="container mx-auto px-6 text-center relative z-10">
        <div ref="ctaContent">
          <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Ready to Optimize Your Logistics?
        </h2>
          <p class="text-xl md:text-2xl font-light mb-10 max-w-3xl mx-auto">
            Join thousands of satisfied customers who trust us with their global logistics needs
        </p>
          <div class="flex flex-col sm:flex-row gap-6 justify-center">
        <router-link 
              ref="primaryCtaBtn"
          to="/contact" 
              class="group bg-secondary-500 hover:bg-secondary-400 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 relative overflow-hidden"
            >
              <span class="relative z-10">Get Free Quote</span>
              <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </router-link>
            <router-link 
              ref="secondaryCtaBtn"
              to="/services" 
              class="group bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary-800 px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105"
            >
              <span class="flex items-center">
                Our Services
                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
              </span>
        </router-link>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';
import { gsap } from 'gsap';

// Template refs
const aboutRef = ref(null);
const heroRef = ref(null);
const heroTitle = ref(null);
const heroSubtitle = ref(null);
const storyRef = ref(null);
const storyContent = ref(null);
const storyVisual = ref(null);
const valuesRef = ref(null);
const valuesHeader = ref(null);
const missionCard = ref(null);
const visionCard = ref(null);
const valuesCard = ref(null);
const whyUsRef = ref(null);
const whyUsHeader = ref(null);
const ctaRef = ref(null);
const ctaContent = ref(null);
const primaryCtaBtn = ref(null);
const secondaryCtaBtn = ref(null);
const featureRefs = ref([]);

// Why Choose Us features based on brochure
const features = ref([
  {
    id: 1,
    icon: "🌍",
    title: "Global Network",
    description: "Extensive worldwide coverage connecting major trade routes and destinations"
  },
  {
    id: 2,
    icon: "⚡",
    title: "Timely Delivery",
    description: "Reliable schedules and on-time performance for all your shipments"
  },
  {
    id: 3,
    icon: "💼",
    title: "Cost-Effective",
    description: "Competitive pricing with transparent cost structures and no hidden fees"
  },
  {
    id: 4,
    icon: "🛡️",
    title: "Secure & Safe",
    description: "Advanced tracking, insurance options, and risk management protocols"
  }
]);

const initProfessionalAnimations = () => {
  // Hero Section Animation
  gsap.set([heroTitle.value, heroSubtitle.value], { opacity: 0, y: 60 });
  gsap.timeline()
    .to(heroTitle.value, {
      opacity: 1,
      y: 0,
      duration: 1.2,
      ease: "power3.out"
    })
    .to(heroSubtitle.value, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "power2.out"
    }, "-=0.6");

  // Story Section ScrollTrigger
  gsap.set([storyContent.value, storyVisual.value], { opacity: 0, y: 80 });
  gsap.timeline({
    scrollTrigger: {
      trigger: storyRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(storyContent.value, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power3.out"
  })
  .to(storyVisual.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "back.out(1.7)"
  }, "-=0.5");

  // Values Section
  gsap.set([valuesHeader.value, missionCard.value, visionCard.value, valuesCard.value], { opacity: 0, y: 60 });
  gsap.timeline({
    scrollTrigger: {
      trigger: valuesRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(valuesHeader.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out"
  })
  .to([missionCard.value, visionCard.value, valuesCard.value], {
    opacity: 1,
    y: 0,
    duration: 0.8,
    stagger: 0.2,
    ease: "back.out(1.7)"
  }, "-=0.3");

  // Why Choose Us
  gsap.set([whyUsHeader.value, ...featureRefs.value], { opacity: 0, y: 60 });
  gsap.timeline({
    scrollTrigger: {
      trigger: whyUsRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(whyUsHeader.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out"
  })
  .to(featureRefs.value, {
    opacity: 1,
    y: 0,
    duration: 0.6,
    stagger: 0.15,
    ease: "back.out(1.7)"
  }, "-=0.3");

  // CTA Section
  gsap.set(ctaContent.value, { opacity: 0, y: 60 });
  gsap.to(ctaContent.value, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ctaRef.value,
      start: "top 80%",
      toggleActions: "play none none reverse"
    }
  });

  // Enhanced button hover effects
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
    }, 300);
  });
});
</script>

<style scoped>
.about-page {
  min-height: 100vh;
}

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