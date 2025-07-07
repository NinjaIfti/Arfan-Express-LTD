<template>
  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <!-- Image as background -->
        <div class="order-1" data-aos="fade-right">
          <div class="logistics-bg-image"></div>
        </div>

        <!-- Content -->
        <div class="order-2" data-aos="fade-left">
          <div class="flex items-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full flex items-center justify-center mr-6">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 9.74s9-4.19 9-9.74V7l-10-5z"/>
              </svg>
            </div>
            <h2 class="text-4xl font-bold text-gray-800">
              Value-Added <span class="text-purple-600">Logistics Services</span>
            </h2>
          </div>
          
          <p class="text-lg text-gray-600 mb-8 leading-relaxed">
            Beyond traditional freight, we offer specialized services to enhance your supply chain and optimize your logistics operations.
          </p>

          <div class="space-y-4">
            <div 
              v-for="(service, index) in services" 
              :key="service"
              class="flex items-center text-gray-700"
              :data-aos="'fade-up'"
              :data-aos-delay="index * 100"
            >
              <div class="w-6 h-6 bg-gradient-to-r from-purple-600 to-blue-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
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
              class="inline-flex items-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
            >
              Explore Logistics Solutions
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
  'Warehousing & Distribution',
  'Packaging & Labelling',
  'Barcoding',
  'Cargo Insurance',
  'Quality Control Inspections',
  'Risk Management'
]);
</script>

<style scoped>
.logistics-bg-image {
  width: 100%;
  height: 24rem;
  border-radius: 1rem;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  background-image: url('/images/logistic.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
}
.logistics-bg-image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 1rem;
  background: linear-gradient(90deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.1) 100%);
}
</style> 