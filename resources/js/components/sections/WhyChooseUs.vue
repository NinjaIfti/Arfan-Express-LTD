<template>
  <section class="py-20 bg-white">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div data-aos="fade-right">
          <h2 class="text-4xl md:text-5xl font-bold text-neutral-600 mb-6">
            Why Choose <span class="text-primary">Arfan Express?</span>
          </h2>
          <p class="text-xl text-neutral-500 mb-8 leading-relaxed">
            With over 15 years of experience in global logistics, we've built a reputation 
            for reliability, efficiency, and exceptional customer service.
          </p>

          <div class="space-y-6">
            <div 
              v-for="(feature, index) in features" 
              :key="feature.id"
              class="flex items-start"
              :data-aos="'fade-up'"
              :data-aos-delay="index * 100"
            >
              <div class="flex-shrink-0 w-12 h-12 bg-primary text-white rounded-lg flex items-center justify-center mr-4">
                <component :is="feature.icon" class="w-6 h-6" />
              </div>
              <div>
                <h3 class="text-xl font-semibold text-neutral-600 mb-2">{{ feature.title }}</h3>
                <p class="text-neutral-500">{{ feature.description }}</p>
              </div>
            </div>
          </div>

          <div class="mt-10">
            <router-link 
              to="/about" 
              class="inline-flex items-center bg-secondary hover:bg-green-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
            >
              Learn More About Us
              <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </router-link>
          </div>
        </div>

        <!-- Image/Illustration -->
        <div class="relative" data-aos="fade-left">
          <div class="relative z-10">
            <!-- Placeholder for image or illustration -->
            <div class="aspect-w-4 aspect-h-3 bg-gradient-to-br from-primary to-blue-600 rounded-2xl overflow-hidden">
              <div class="flex items-center justify-center text-white text-6xl">
                🌐
              </div>
            </div>
            
            <!-- Floating Elements -->
            <div class="absolute -top-6 -right-6 w-24 h-24 bg-secondary rounded-full opacity-20 animate-float"></div>
            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-accent rounded-full opacity-10 animate-float" style="animation-delay: 1s;"></div>
          </div>
          
          <!-- Background decoration -->
          <div class="absolute inset-0 bg-gradient-to-br from-blue-100 to-green-100 rounded-2xl transform rotate-3 scale-105 -z-10"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

// Define icon components inline for simplicity
const CheckCircleIcon = () => {
  return `<svg fill="currentColor" viewBox="0 0 20 20">
    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
  </svg>`;
};

const features = ref([
  {
    id: 1,
    icon: 'CheckCircleIcon',
    title: 'Global Network',
    description: 'Extensive worldwide network ensuring your cargo reaches any destination efficiently.'
  },
  {
    id: 2,
    icon: 'CheckCircleIcon',
    title: 'Real-time Tracking',
    description: 'Advanced tracking systems providing complete visibility of your shipments 24/7.'
  },
  {
    id: 3,
    icon: 'CheckCircleIcon',
    title: 'Expert Team',
    description: 'Professional logistics experts with deep industry knowledge and experience.'
  },
  {
    id: 4,
    icon: 'CheckCircleIcon',
    title: 'Cost Effective',
    description: 'Competitive pricing without compromising on quality and service excellence.'
  },
  {
    id: 5,
    icon: 'CheckCircleIcon',
    title: 'Customer Support',
    description: 'Dedicated 24/7 customer support team ready to assist with any requirements.'
  }
]);
</script> 