<template>
  <div class="services-page">
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-blue-600 text-white">
      <div class="container mx-auto px-6">
        <div class="text-center">
          <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">
            Our <span class="text-secondary">Services</span>
          </h1>
          <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            Comprehensive logistics solutions for all your shipping needs
          </p>
        </div>
      </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-background-50">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ServiceCard
            v-for="(service, index) in services"
            :key="service.id"
            :service="service"
            :data-aos="'fade-up'"
            :data-aos-delay="index * 100"
          />
        </div>
      </div>
    </section>

    <!-- Why Choose Our Services -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
          <h2 class="text-4xl md:text-5xl font-bold text-neutral-600 mb-4">
            Why Choose Our <span class="text-primary">Services?</span>
          </h2>
          <p class="text-xl text-neutral-500 max-w-2xl mx-auto">
            We deliver excellence through innovation, reliability, and customer-focused solutions
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div 
            v-for="(feature, index) in features" 
            :key="feature.id"
            class="text-center group"
            :data-aos="'fade-up'"
            :data-aos-delay="index * 100"
          >
            <div class="w-20 h-20 mx-auto bg-primary text-white rounded-full flex items-center justify-center mb-6 group-hover:bg-secondary transition-colors duration-300">
              <div class="text-3xl">{{ feature.icon }}</div>
            </div>
            <h3 class="text-xl font-bold text-neutral-600 mb-3">{{ feature.title }}</h3>
            <p class="text-neutral-500">{{ feature.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Quote Request Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">
          Ready to Get Started?
        </h2>
        <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
          Contact us today for a customized quote tailored to your specific logistics needs
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
          <router-link 
            to="/contact" 
            class="inline-flex items-center bg-secondary hover:bg-green-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
          >
            Request Quote
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </router-link>
          <a 
            href="tel:+1234567890" 
            class="inline-flex items-center bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
          >
            Call Us Now
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
          </a>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import ServiceCard from '../components/common/ServiceCard.vue';

const services = ref([
  {
    id: 1,
    title: 'Ocean Freight',
    description: 'Cost-effective sea shipping solutions for large cargo volumes with global coverage and reliable delivery schedules.',
    icon: '🚢',
    features: ['FCL & LCL Services', 'Global Port Coverage', 'Customs Clearance', 'Container Tracking', 'Cargo Insurance'],
    link: '/services/ocean-freight',
    color: 'blue'
  },
  {
    id: 2,
    title: 'Air Freight',
    description: 'Fast and reliable air cargo services for time-sensitive shipments with priority handling worldwide.',
    icon: '✈️',
    features: ['Express Delivery', 'Priority Handling', 'Real-time Tracking', 'Dangerous Goods', 'Same Day Service'],
    link: '/services/air-freight',
    color: 'green'
  },
  {
    id: 3,
    title: 'Road Transport',
    description: 'Efficient ground transportation and last-mile delivery solutions with comprehensive tracking.',
    icon: '🚛',
    features: ['Door-to-Door', 'Last Mile Delivery', 'Cross Border', 'Temperature Control', 'Flexible Scheduling'],
    link: '/services/road-transport',
    color: 'yellow'
  },
  {
    id: 4,
    title: 'Customs Clearance',
    description: 'Expert customs brokerage services ensuring smooth border crossings and compliance.',
    icon: '📋',
    features: ['Documentation', 'Duty Calculation', 'Compliance Check', 'Fast Processing', 'Regulatory Updates'],
    link: '/services/customs-clearance',
    color: 'purple'
  },
  {
    id: 5,
    title: 'Warehousing',
    description: 'Secure storage and distribution services with modern facilities and inventory management.',
    icon: '🏭',
    features: ['Climate Control', 'Inventory Management', 'Pick & Pack', 'Cross Docking', 'Quality Control'],
    link: '/services/warehousing',
    color: 'red'
  },
  {
    id: 6,
    title: 'Project Cargo',
    description: 'Specialized handling for oversized and complex cargo with dedicated project management.',
    icon: '⚙️',
    features: ['Heavy Lift', 'Route Planning', 'Special Equipment', 'Risk Management', 'Project Coordination'],
    link: '/services/project-cargo',
    color: 'indigo'
  }
]);

const features = ref([
  {
    id: 1,
    icon: '🌐',
    title: 'Global Network',
    description: 'Extensive worldwide network covering 50+ countries'
  },
  {
    id: 2,
    icon: '📱',
    title: 'Real-time Tracking',
    description: 'Advanced tracking systems for complete visibility'
  },
  {
    id: 3,
    icon: '🛡️',
    title: 'Secure & Safe',
    description: 'Comprehensive insurance and security measures'
  },
  {
    id: 4,
    icon: '⚡',
    title: 'Fast & Reliable',
    description: '99.9% on-time delivery with quality assurance'
  }
]);
</script>

<style scoped>
.services-page {
  min-height: 100vh;
}
</style> 