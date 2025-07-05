<template>
  <section class="py-20 bg-primary text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
      <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-800"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">
          Our <span class="text-secondary">Impact</span>
        </h2>
        <p class="text-xl opacity-90 max-w-2xl mx-auto">
          Numbers that speak to our commitment to excellence and customer satisfaction
        </p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        <div 
          v-for="(stat, index) in stats" 
          :key="stat.id"
          class="text-center"
          :data-aos="'fade-up'"
          :data-aos-delay="index * 100"
        >
          <div class="mb-4">
            <div class="text-6xl mb-2">{{ stat.icon }}</div>
            <div class="text-4xl md:text-5xl font-bold text-secondary mb-2">
              <AnimatedCounter :target="stat.value" :suffix="stat.suffix" />
            </div>
            <div class="text-lg font-semibold opacity-90 mb-2">{{ stat.label }}</div>
            <div class="text-sm opacity-75">{{ stat.description }}</div>
          </div>
        </div>
      </div>

      <!-- Additional Stats -->
      <div class="mt-16 text-center" data-aos="fade-up" data-aos-delay="400">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="flex items-center justify-center">
            <svg class="w-8 h-8 text-secondary mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            <span class="text-lg">ISO 9001:2015 Certified</span>
          </div>
          <div class="flex items-center justify-center">
            <svg class="w-8 h-8 text-secondary mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="text-lg">99.9% On-Time Delivery</span>
          </div>
          <div class="flex items-center justify-center">
            <svg class="w-8 h-8 text-secondary mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"/>
            </svg>
            <span class="text-lg">24/7 Customer Support</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';
import AnimatedCounter from '../common/AnimatedCounter.vue';

const stats = ref([
  {
    id: 1,
    icon: '📦',
    value: 10000,
    suffix: '+',
    label: 'Shipments',
    description: 'Successfully delivered'
  },
  {
    id: 2,
    icon: '🌍',
    value: 50,
    suffix: '+',
    label: 'Countries',
    description: 'Global coverage'
  },
  {
    id: 3,
    icon: '🏢',
    value: 500,
    suffix: '+',
    label: 'Happy Clients',
    description: 'Trust our services'
  },
  {
    id: 4,
    icon: '⏱️',
    value: 15,
    suffix: '+',
    label: 'Years',
    description: 'Industry experience'
  }
]);
</script> 