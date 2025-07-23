<template>
  <div ref="aboutRef" class="about-page">
    <!-- Professional Hero Section -->
    <section ref="heroRef" class="relative py-24 bg-gray-900 text-white overflow-hidden">
      <!-- Background Image -->
      <div class="absolute inset-0 z-0">
        <img 
          :src="whoweImage" 
          alt="About Arfan Express" 
          class="w-full h-full object-cover opacity-40"
        />
        <div class="absolute inset-0 bg-gradient-to-br from-primary-900/40 via-primary-800/40 to-primary-700/40"></div>
      </div>
      
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10 z-5">
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
              <!-- Professional Visual with Icon -->
              <div class="bg-gradient-to-br from-primary-600 to-secondary-600 rounded-3xl p-12 text-center text-white shadow-2xl transform rotate-3 hover:rotate-0 transition-transform duration-700">
                <div class="flex justify-center mb-6">
                  <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
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
          <!-- Mission -->
          <div ref="missionCard" class="group relative">
            <div class="bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 h-full">
              <div class="flex justify-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl flex items-center justify-center transition-transform duration-500 group-hover:scale-110">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                  </svg>
                </div>
              </div>
              <h3 class="text-2xl font-bold text-primary-800 mb-6 text-center">Our Mission</h3>
              <p class="text-gray-600 leading-relaxed text-lg text-center">
                To simplify global logistics through cost-effective, reliable, and tailored solutions 
                that address our customers' pain points, ensuring timely delivery and seamless operations.
              </p>
              <!-- Gradient Border -->
              <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-gradient-to-r from-primary-500/20 to-secondary-500/20 -z-10"></div>
            </div>
          </div>

          <!-- Vision -->
          <div ref="visionCard" class="group relative">
            <div class="bg-white rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 h-full">
              <div class="flex justify-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-secondary-500 to-secondary-600 rounded-2xl flex items-center justify-center transition-transform duration-500 group-hover:scale-110">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                  </svg>
                </div>
              </div>
              <h3 class="text-2xl font-bold text-primary-800 mb-6 text-center">Our Vision</h3>
              <p class="text-gray-600 leading-relaxed text-lg text-center">
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
              <div class="flex justify-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-primary-600 to-secondary-500 rounded-2xl flex items-center justify-center transition-transform duration-500 group-hover:scale-110">
                  <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                  </svg>
                </div>
              </div>
              <h3 class="text-2xl font-bold text-primary-800 mb-6 text-center">Our Values</h3>
              <div class="space-y-4">
                <div class="flex items-center text-gray-600">
                  <div class="w-3 h-3 bg-secondary-500 rounded-full mr-4 flex-shrink-0"></div>
                  <span class="font-medium">Reliability & Trust</span>
                </div>
                <div class="flex items-center text-gray-600">
                  <div class="w-3 h-3 bg-primary-500 rounded-full mr-4 flex-shrink-0"></div>
                  <span class="font-medium">Innovation & Excellence</span>
                </div>
                <div class="flex items-center text-gray-600">
                  <div class="w-3 h-3 bg-secondary-500 rounded-full mr-4 flex-shrink-0"></div>
                  <span class="font-medium">Customer-Centric Approach</span>
                </div>
                <div class="flex items-center text-gray-600">
                  <div class="w-3 h-3 bg-primary-500 rounded-full mr-4 flex-shrink-0"></div>
                  <span class="font-medium">Global Connectivity</span>
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
              <div class="flex justify-center mb-6">
                <div class="w-14 h-14 bg-gradient-to-br from-primary-500 to-secondary-500 rounded-xl flex items-center justify-center transition-transform duration-500 group-hover:scale-110">
                  <component :is="feature.icon" class="w-7 h-7 text-white" />
                </div>
              </div>
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
import { ref, onMounted, nextTick, h } from 'vue';
import { gsap } from 'gsap';

// Import background image
import whoweImage from '@/assets/images/whowe.jpg';

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

// Professional SVG Icon Components
const GlobalNetworkIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
  })
]);

const TimingIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
  })
]);

const CostEffectiveIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
  })
]);

const SecurityIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
  })
]);

// Why Choose Us features with professional icons
const features = ref([
  {
    id: 1,
    icon: GlobalNetworkIcon,
    title: "Global Network",
    description: "Extensive worldwide coverage connecting major trade routes and destinations"
  },
  {
    id: 2,
    icon: TimingIcon,
    title: "Timely Delivery",
    description: "Reliable schedules and on-time performance for all your shipments"
  },
  {
    id: 3,
    icon: CostEffectiveIcon,
    title: "Cost-Effective",
    description: "Competitive pricing with transparent cost structures and no hidden fees"
  },
  {
    id: 4,
    icon: SecurityIcon,
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
  gsap.set([whyUsHeader.value, ...featureRefs.value.filter(Boolean)], { opacity: 0, y: 60 });
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
  .to(featureRefs.value.filter(Boolean), {
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

/* Professional hover effects */
.group:hover .bg-gradient-to-br {
  transform: scale(1.05);
}

/* Smooth transitions */
.transition-all {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Enhanced card hover effects */
.group:hover {
  transform: translateY(-8px);
}

/* Professional shadows */
.shadow-xl {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.hover\:shadow-2xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
</style> 