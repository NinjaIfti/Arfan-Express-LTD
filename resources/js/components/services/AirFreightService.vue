<template>
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Image as background -->
        <div class="order-1 lg:order-2" data-aos="fade-left">
          <div class="airfreight-bg-image"></div>
        </div>

        <!-- Content -->
        <div class="order-2 lg:order-1" data-aos="fade-right">
          <div class="flex items-center mb-6">
            <div class="w-16 h-16 bg-sky-600 rounded-full flex items-center justify-center mr-6">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>
              </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-800">
              Express Air <span class="text-sky-600">Freight Solutions</span>
            </h2>
          </div>
          
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            For time-critical shipments, our air freight services provide the fastest way to transport your goods across international borders.
          </p>

          <div class="space-y-4">
            <div 
              v-for="(service, index) in services" 
              :key="service"
              class="flex items-center text-gray-700"
              :data-aos="'fade-up'"
              :data-aos-delay="index * 100"
            >
              <div class="w-6 h-6 bg-sky-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                </svg>
              </div>
              <span class="text-lg font-medium">{{ service }}</span>
            </div>
          </div>

          <div class="mt-8">
            <router-link 
              to="/contact" 
              class="inline-flex items-center bg-sky-600 hover:bg-sky-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
            >
              Schedule Air Freight
              <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

const services = ref([
  'Priority Air Cargo',
  'Economy Air Freight',
  'Door-to-Door Delivery',
  'Charter Services',
  'Door-to-Door Service',
  'Real-Time Tracking'
]);
</script>

<style scoped>
.airfreight-bg-image {
  width: 100%;
  height: 24rem;
  border-radius: 1rem;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  background-image: url('/images/hero2.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
}
.airfreight-bg-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 1rem;
  background: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%);
}
</style> 