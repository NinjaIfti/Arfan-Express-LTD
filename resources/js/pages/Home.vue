<template>
  <div class="home-page">
    <!-- Hero Section -->
    <HeroSection />
    
    <!-- Services Overview -->
    <ServicesOverview />
    
    <!-- Why Choose Us -->
    <WhyChooseUs />
    
    <!-- Stats Section -->
    <StatsSection />
    
    <!-- Testimonials -->
    <TestimonialsSection />
  </div>
</template>

<script setup>
import HeroSection from '../components/sections/HeroSection.vue';
import ServicesOverview from '../components/sections/ServicesOverview.vue';
import WhyChooseUs from '../components/sections/WhyChooseUs.vue';
import StatsSection from '../components/sections/StatsSection.vue';
import TestimonialsSection from '../components/sections/TestimonialsSection.vue';

// SEO and meta tags could be added here
</script>

<style scoped>
.home-page {
  min-height: 100vh;
}
</style> 