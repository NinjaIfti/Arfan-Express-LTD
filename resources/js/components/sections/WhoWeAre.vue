<template>
  <section class="who-we-are-section py-20 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-white"></div>
    <div class="absolute top-10 right-10 w-64 h-64 bg-gradient-to-br from-blue-100 to-blue-50 rounded-full opacity-20"></div>
    <div class="absolute bottom-10 left-10 w-48 h-48 bg-gradient-to-br from-secondary-100 to-secondary-50 rounded-full opacity-20"></div>

    <div class="container mx-auto px-6 relative z-10">
      <!-- Section Header -->
      <div class="text-center mb-16">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-[#1a4a7a] to-[#2a5a8a] rounded-2xl mb-6">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
          Who we are...
        </h2>
        <div class="w-24 h-1 bg-gradient-to-r from-[#1a4a7a] to-[#2a5a8a] mx-auto rounded-full"></div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <!-- Left Content -->
        <div class="space-y-8">
          <!-- Company Description -->
          <div class="space-y-6">
            <p class="text-lg text-gray-700 leading-relaxed">
              <span class="font-semibold text-[#1a4a7a]">Arfan Express Ltd.</span> is a leading freight 
              forwarding company dedicated to delivering reliable and cost-efficient 
              logistics services worldwide. With over 
              <span class="font-semibold text-[#2a5a8a]">30 years</span> of 
              experience, we specialize in sea, air, and road freight, providing end-to-end 
              solutions to streamline your supply chain.
            </p>
            <p class="text-lg text-gray-700 leading-relaxed">
              Our global network and cutting-edge technology ensure that your cargo 
              reaches its destination on time and without hassle.
            </p>
          </div>

          <!-- Vision -->
          <div class="bg-gradient-to-r from-blue-50 to-blue-100 p-6 rounded-2xl border-l-4 border-[#1a4a7a]">
            <h3 class="text-2xl font-bold text-[#1a4a7a] mb-4 flex items-center">
              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
              Our Vision
            </h3>
            <p class="text-gray-700 leading-relaxed">
              To be the global leader in freight forwarding industry, delivering innovative 
              logistics solutions that empower businesses to succeed.
            </p>
          </div>

          <!-- Mission -->
          <div class="bg-gradient-to-r from-secondary-50 to-secondary-100 p-6 rounded-2xl border-l-4 border-[#2a5a8a]">
            <h3 class="text-2xl font-bold text-[#2a5a8a] mb-4 flex items-center">
              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
              </svg>
              Our Mission
            </h3>
            <p class="text-gray-700 leading-relaxed">
              To simplify global logistics through cost-effective, reliable, and tailored solutions 
              that address our customers' pain points, ensuring timely delivery and seamless 
              operations.
            </p>
          </div>
        </div>

        <!-- Right Content - Image with Stats Overlay -->
        <div class="relative">
          <!-- Main Image -->
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <div class="w-full h-96 whowe-background-image"></div>
            <!-- Gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#1a4a7a]/80 via-[#1a4a7a]/40 to-transparent"></div>
            
            <!-- Stats overlay -->
            <div class="absolute bottom-0 left-0 right-0 p-8">
              <div class="text-center mb-6">
                <h3 class="text-2xl font-bold text-white mb-2">Global Reach</h3>
                <p class="text-blue-100 text-sm leading-relaxed">
                  Connecting businesses worldwide with our extensive network
                </p>
              </div>

              <!-- Stats Grid -->
              <div class="grid grid-cols-2 gap-4">
                <div class="text-center bg-white/20 backdrop-blur-sm rounded-xl p-3">
                  <div class="text-2xl font-bold text-white mb-1">15+</div>
                  <div class="text-blue-200 text-xs">Years Experience</div>
                </div>
                <div class="text-center bg-white/20 backdrop-blur-sm rounded-xl p-3">
                  <div class="text-2xl font-bold text-white mb-1">100+</div>
                  <div class="text-blue-200 text-xs">Global Partners</div>
                </div>
                <div class="text-center bg-white/20 backdrop-blur-sm rounded-xl p-3">
                  <div class="text-2xl font-bold text-white mb-1">50K+</div>
                  <div class="text-blue-200 text-xs">Shipments</div>
                </div>
                <div class="text-center bg-white/20 backdrop-blur-sm rounded-xl p-3">
                  <div class="text-2xl font-bold text-white mb-1">24/7</div>
                  <div class="text-blue-200 text-xs">Support</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating elements -->
          <div class="absolute -top-4 -right-4 w-8 h-8 bg-yellow-400 rounded-full animate-bounce"></div>
          <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-green-400 rounded-full animate-pulse"></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue';

// Animation refs
const sectionRef = ref(null);

onMounted(() => {
  // Add any entrance animations here if needed
});
</script>

<style scoped>
/* Who We Are Background Image */
.whowe-background-image {
  background-image: url('/images/whowe.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Custom animations */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .grid-cols-1.lg\\:grid-cols-2 {
    gap: 3rem;
  }
}
</style> 