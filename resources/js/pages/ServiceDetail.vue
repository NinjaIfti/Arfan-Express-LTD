<template>
  <div class="service-detail-page" v-if="service">
    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-blue-600 text-white">
      <div class="container mx-auto px-6">
        <div class="text-center">
          <div class="text-6xl mb-6" data-aos="fade-up">{{ service.icon }}</div>
          <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up" data-aos-delay="200">
            {{ service.title }}
          </h1>
          <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">
            {{ service.description }}
          </p>
        </div>
      </div>
    </section>

    <!-- Service Details -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
          <div data-aos="fade-right">
            <h2 class="text-4xl font-bold text-neutral-600 mb-6">Service Overview</h2>
            <div class="space-y-6 text-lg text-neutral-500 leading-relaxed">
              <p v-for="paragraph in service.detailedDescription" :key="paragraph">
                {{ paragraph }}
              </p>
            </div>
          </div>
          
          <div data-aos="fade-left">
            <div class="bg-background-50 rounded-2xl p-8">
              <h3 class="text-2xl font-bold text-neutral-600 mb-6">Key Features</h3>
              <ul class="space-y-4">
                <li 
                  v-for="feature in service.features" 
                  :key="feature"
                  class="flex items-center"
                >
                  <svg class="w-5 h-5 text-secondary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                  <span class="text-neutral-600">{{ feature }}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Process Steps -->
    <section class="py-20 bg-background-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
          <h2 class="text-4xl md:text-5xl font-bold text-neutral-600 mb-4">
            How It <span class="text-primary">Works</span>
          </h2>
          <p class="text-xl text-neutral-500 max-w-2xl mx-auto">
            Our streamlined process ensures your cargo is handled with care and efficiency
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div 
            v-for="(step, index) in service.process" 
            :key="step.id"
            class="text-center"
            :data-aos="'fade-up'"
            :data-aos-delay="index * 100"
          >
            <div class="relative">
              <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6">
                {{ index + 1 }}
              </div>
              <div v-if="index < service.process.length - 1" class="hidden md:block absolute top-8 left-full w-full h-0.5 bg-neutral-300"></div>
            </div>
            <h3 class="text-xl font-bold text-neutral-600 mb-3">{{ step.title }}</h3>
            <p class="text-neutral-500">{{ step.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Benefits -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
          <h2 class="text-4xl md:text-5xl font-bold text-neutral-600 mb-4">
            Why Choose This <span class="text-primary">Service?</span>
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div 
            v-for="(benefit, index) in service.benefits" 
            :key="benefit.id"
            class="bg-background-50 rounded-2xl p-8 text-center"
            :data-aos="'fade-up'"
            :data-aos-delay="index * 100"
          >
            <div class="text-5xl mb-6">{{ benefit.icon }}</div>
            <h3 class="text-xl font-bold text-neutral-600 mb-4">{{ benefit.title }}</h3>
            <p class="text-neutral-500">{{ benefit.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-primary text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">
          Ready to Use This Service?
        </h2>
        <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
          Get in touch with our experts to discuss your specific requirements
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
          <router-link 
            to="/contact" 
            class="inline-flex items-center bg-secondary hover:bg-green-600 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
          >
            Get Quote
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </router-link>
          <router-link 
            to="/services" 
            class="inline-flex items-center bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
          >
            View All Services
          </router-link>
        </div>
      </div>
    </section>
  </div>

  <!-- Loading/Error State -->
  <div v-else class="min-h-screen flex items-center justify-center">
    <div class="text-center">
      <div class="text-6xl mb-4">📦</div>
      <h2 class="text-2xl font-bold text-neutral-600 mb-2">Service Not Found</h2>
      <p class="text-neutral-500 mb-6">The requested service could not be found.</p>
      <router-link 
        to="/services" 
        class="inline-flex items-center bg-primary hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300"
      >
        View All Services
      </router-link>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue';
import { useRoute } from 'vue-router';

const route = useRoute();

// Service data (in a real app, this would come from an API)
const servicesData = {
  'ocean-freight': {
    id: 1,
    title: 'Ocean Freight',
    icon: '🚢',
    description: 'Cost-effective sea shipping solutions for large cargo volumes with global coverage and reliable delivery schedules.',
    detailedDescription: [
      'Our ocean freight services provide the most cost-effective solution for shipping large volumes of cargo worldwide. With partnerships with major shipping lines, we offer both Full Container Load (FCL) and Less than Container Load (LCL) services.',
      'Whether you\'re shipping manufactured goods, raw materials, or project cargo, our ocean freight solutions are designed to meet your specific requirements while ensuring maximum cost efficiency.',
      'We handle all aspects of your ocean shipment from port-to-port, including customs clearance, documentation, and cargo insurance, providing you with a seamless shipping experience.'
    ],
    features: ['FCL & LCL Services', 'Global Port Coverage', 'Customs Clearance', 'Container Tracking', 'Cargo Insurance'],
    process: [
      { id: 1, title: 'Quote Request', description: 'Submit your shipping requirements for a competitive quote' },
      { id: 2, title: 'Booking Confirmation', description: 'Confirm your booking and prepare documentation' },
      { id: 3, title: 'Cargo Collection', description: 'We collect your cargo and handle export procedures' },
      { id: 4, title: 'Ocean Transit', description: 'Your cargo is transported via our partner shipping lines' },
      { id: 5, title: 'Delivery', description: 'Customs clearance and final delivery to destination' }
    ],
    benefits: [
      { id: 1, icon: '💰', title: 'Cost Effective', description: 'Most economical option for large volume shipments' },
      { id: 2, icon: '🌍', title: 'Global Reach', description: 'Access to major ports worldwide through our network' },
      { id: 3, icon: '📦', title: 'Flexible Options', description: 'Both FCL and LCL services to suit your needs' }
    ]
  },
  'air-freight': {
    id: 2,
    title: 'Air Freight',
    icon: '✈️',
    description: 'Fast and reliable air cargo services for time-sensitive shipments with priority handling worldwide.',
    detailedDescription: [
      'When speed is critical, our air freight services provide the fastest and most reliable solution for your shipping needs. We work with leading airlines to ensure your cargo reaches its destination quickly and safely.',
      'Our air freight solutions are ideal for high-value, time-sensitive, or perishable goods that require expedited delivery. We offer both express and standard air freight services to meet different budget and timeline requirements.',
      'With our extensive network and 24/7 tracking capabilities, you can have complete peace of mind knowing your cargo is in safe hands and will arrive on schedule.'
    ],
    features: ['Express Delivery', 'Priority Handling', 'Real-time Tracking', 'Dangerous Goods', 'Same Day Service'],
    process: [
      { id: 1, title: 'Urgent Quote', description: 'Fast quote processing for time-sensitive shipments' },
      { id: 2, title: 'Immediate Booking', description: 'Priority booking on next available flight' },
      { id: 3, title: 'Express Collection', description: 'Rapid cargo collection and airport transfer' },
      { id: 4, title: 'Air Transit', description: 'Fast air transportation to destination airport' },
      { id: 5, title: 'Rush Delivery', description: 'Expedited customs clearance and final delivery' }
    ],
    benefits: [
      { id: 1, icon: '⚡', title: 'Speed', description: 'Fastest shipping option for urgent deliveries' },
      { id: 2, icon: '🛡️', title: 'Security', description: 'Enhanced security for high-value cargo' },
      { id: 3, icon: '📱', title: 'Tracking', description: 'Real-time updates throughout the journey' }
    ]
  },
  // Add more services as needed
};

const service = computed(() => {
  const serviceType = route.params.type;
  return servicesData[serviceType] || null;
});

onMounted(() => {
  // You could fetch service data from API here
});
</script>

<style scoped>
.service-detail-page {
  min-height: 100vh;
}
</style> 