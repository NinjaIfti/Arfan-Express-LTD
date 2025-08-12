<template>
  <div class="services-page">
    <!-- Hero Section -->
    <section class="py-20 bg-gray-900 text-white relative overflow-hidden">
      <!-- Background Image -->
      <div class="absolute inset-0 z-0">
        <img 
          :src="serviceImage" 
          alt="Our Services" 
          class="w-full h-full object-cover opacity-40"
        />
        <div class="absolute inset-0 bg-gradient-to-r from-primary-900/40 to-blue-900/40"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
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

    <!-- Individual Service Components -->
    <OceanFreightService />
    <ValueAddedLogisticsService />
    <CustomsBrokerageService />
    <RoadTransportService />
    <AirFreightService />
    <SupplyChainService />
    <DeliveryTermsService />

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

   
  </div>
</template>

<script setup>
import { ref } from 'vue';
import ServiceIcon from '../components/common/ServiceCard.vue';
import OceanFreightService from '../components/services/OceanFreightService.vue';
import ValueAddedLogisticsService from '../components/services/ValueAddedLogisticsService.vue';
import CustomsBrokerageService from '../components/services/CustomsBrokerageService.vue';
import RoadTransportService from '../components/services/RoadTransportService.vue';
import AirFreightService from '../components/services/AirFreightService.vue';
import SupplyChainService from '../components/services/SupplyChainService.vue';
import DeliveryTermsService from '../components/services/DeliveryTermsService.vue';
import { gsap } from '@/utils/gsap';

// Import background image
import serviceImage from '@/assets/images/service.jpg';

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