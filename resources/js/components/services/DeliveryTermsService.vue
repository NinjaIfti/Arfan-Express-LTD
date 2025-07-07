<template>
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
          International <span class="text-blue-600">Delivery Terms</span>
        </h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Choose the delivery terms that best suit your business needs and requirements
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- DDP Card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
          <div class="bg-gradient-to-r from-blue-600 to-blue-700 p-6 text-white">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
              </div>
              <h3 class="text-2xl font-bold">DDP</h3>
            </div>
            <p class="text-lg font-semibold mb-2">Delivered Duty Paid</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-6 leading-relaxed">
              The seller covers all costs, risks, and duties, delivering goods directly to the buyer's location, providing a hassle-free experience.
            </p>
            <div class="space-y-3">
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>All costs covered by seller</span>
              </div>
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Maximum responsibility</span>
              </div>
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Hassle-free for buyer</span>
              </div>
            </div>
          </div>
        </div>

        <!-- DDU Card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
          <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-6 text-white">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"/>
                </svg>
              </div>
              <h3 class="text-2xl font-bold">DDU</h3>
            </div>
            <p class="text-lg font-semibold mb-2">Delivered Duty Unpaid</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-6 leading-relaxed">
              The seller delivers goods to the buyer's location, while the buyer is responsible for customs duties and taxes.
            </p>
            <div class="space-y-3">
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Shared responsibility</span>
              </div>
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Buyer handles duties</span>
              </div>
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Cost-effective delivery</span>
              </div>
            </div>
          </div>
        </div>

        <!-- DAP Card -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
          <div class="bg-gradient-to-r from-green-600 to-green-700 p-6 text-white">
            <div class="flex items-center mb-4">
              <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                  <path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/>
                </svg>
              </div>
              <h3 class="text-2xl font-bold">DAP</h3>
            </div>
            <p class="text-lg font-semibold mb-2">Delivered at Place</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-6 leading-relaxed">
              The seller manages all costs and risks until the goods reach the destination, but the buyer handles import duties and customs clearance.
            </p>
            <div class="space-y-3">
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Seller covers transport</span>
              </div>
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Balanced approach</span>
              </div>
              <div class="flex items-center text-sm text-gray-700">
                <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center mr-3">
                  <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                  </svg>
                </div>
                <span>Buyer handles clearance</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="400">
        <router-link 
          to="/contact" 
          class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-300 transform hover:scale-105"
        >
          Choose Your Delivery Terms
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </router-link>
      </div>
    </div>
  </section>
</template>

<script setup>
// No reactive data needed for this component
</script>

<style scoped>
/* Additional styles can be added here if needed */
</style> 