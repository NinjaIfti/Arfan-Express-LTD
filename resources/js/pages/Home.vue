<template>
  <div class="home-page">
    <!-- Hero Section -->
    <HeroSection />
    
    <!-- Company Logos Slider -->
    <LogoSlider />
    
    <!-- Who We Are Section -->
    <WhoWeAre />
    
    <!-- Our Expertise (Services Overview) -->
    <ServicesOverview />
    
    <!-- Why Choose Us -->
    <WhyChooseUs />
    

    
    
  </div>
</template>

<script setup>
import HeroSection from '../components/sections/HeroSection.vue';
import LogoSlider from '../components/common/LogoSlider.vue';
import WhoWeAre from '../components/sections/WhoWeAre.vue';
import ServicesOverview from '../components/sections/ServicesOverview.vue';
import WhyChooseUs from '../components/sections/WhyChooseUs.vue';


// SEO and meta tags could be added here
</script>

<style scoped>
.home-page {
  min-height: 100vh;
}
</style> 