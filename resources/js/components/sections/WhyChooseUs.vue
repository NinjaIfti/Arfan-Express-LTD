<template>
  <section class="relative py-16 overflow-hidden bg-gray-50">
    <!-- Plan Background Image with Light Overlay -->
    <div class="absolute inset-0 plan-background-image opacity-20"></div>
    
    <!-- Light Professional Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-white/95 via-gray-50/90 to-blue-50/95"></div>
    
    <!-- Subtle Light Pattern -->
    <div class="absolute inset-0 opacity-5">
      <div class="absolute inset-0" style="background-image: radial-gradient(circle at 25% 25%, #1a4a7a 2px, transparent 2px), radial-gradient(circle at 75% 75%, #2a5a8a 2px, transparent 2px); background-size: 40px 40px;"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-12">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#1a4a7a] to-[#2a5a8a] rounded-2xl mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
          </svg>
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
          Why Choose Us?
        </h2>
        <div class="w-20 h-1 bg-gradient-to-r from-[#1a4a7a] to-[#2a5a8a] mx-auto rounded-full"></div>
      </div>

      <!-- Features Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div
          v-for="(feature, index) in features"
          :key="feature.id"
          class="text-center group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100"
        >
          <!-- Feature Icon -->
          <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-[#1a4a7a] to-[#2a5a8a] rounded-xl mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" v-html="feature.iconSvg"></svg>
          </div>

          <!-- Feature Content -->
          <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-[#1a4a7a] transition-colors duration-300">
            {{ feature.title }}
          </h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            {{ feature.description }}
          </p>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center mt-12">
        <router-link 
          to="/contact" 
          class="inline-flex items-center bg-gradient-to-r from-[#1a4a7a] to-[#2a5a8a] text-white px-8 py-3 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl"
        >
          Get Started Today
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </router-link>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

// Features based on brochure content
const features = ref([
  {
    id: 1,
    title: 'Customizable Logistics Solutions',
    description: 'Tailored logistics solutions designed to meet your specific business requirements and challenges.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>'
  },
  {
    id: 2,
    title: 'Timely Deliveries, Every Time',
    description: 'Reliable delivery schedules with real-time tracking ensuring your cargo arrives on time, every time.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>'
  },
  {
    id: 3,
    title: 'Cost-Effective Freight Solutions',
    description: 'Competitive pricing strategies that optimize your logistics budget without compromising quality.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>'
  },
  {
    id: 4,
    title: 'Comprehensive Customs Brokerage',
    description: 'Expert customs clearance services ensuring smooth border crossings and regulatory compliance.',
    iconSvg: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>'
  }
]);
</script>

<style scoped>
/* Plan Background Image */
.plan-background-image {
  background-image: url('/images/plan.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Text shadow for better readability */
.text-white {
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
}

.text-gray-200 {
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

/* Hover effects */
.group:hover svg {
  transform: scale(1.1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .plan-background-image {
    background-position: center center;
  }
  
  .grid {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
}

/* Smooth transitions */
.transition-all {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
</style> 