<template>
  <section class="py-20 bg-background-50">
    <div class="container mx-auto px-6">
      <!-- Section Header -->
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-bold text-neutral-600 mb-4">
          What Our <span class="text-primary">Clients Say</span>
        </h2>
        <p class="text-xl text-neutral-500 max-w-2xl mx-auto">
          Don't just take our word for it. Here's what our valued clients have to say about our services.
        </p>
      </div>

      <!-- Testimonials Carousel -->
      <div class="relative" data-aos="fade-up" data-aos-delay="200">
        <div class="overflow-hidden">
          <div 
            class="flex transition-transform duration-500 ease-in-out"
            :style="{ transform: `translateX(-${currentSlide * 100}%)` }"
          >
            <div 
              v-for="testimonial in testimonials" 
              :key="testimonial.id"
              class="w-full flex-shrink-0"
            >
              <div class="max-w-4xl mx-auto text-center">
                <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12 relative">
                  <!-- Quote Icon -->
                  <div class="absolute top-6 left-6 text-primary opacity-20">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 32 32">
                      <path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14h-4c0-2.2 1.8-4 4-4V8zm16 0c-3.3 0-6 2.7-6 6v10h10V14h-4c0-2.2 1.8-4 4-4V8z"/>
                    </svg>
                  </div>

                  <!-- Testimonial Text -->
                  <p class="text-lg md:text-xl text-neutral-600 leading-relaxed mb-8 italic">
                    "{{ testimonial.content }}"
                  </p>

                  <!-- Client Info -->
                  <div class="flex items-center justify-center">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                      {{ testimonial.name.charAt(0) }}
                    </div>
                    <div class="text-left">
                      <h4 class="font-semibold text-neutral-600">{{ testimonial.name }}</h4>
                      <p class="text-neutral-500">{{ testimonial.position }}</p>
                      <p class="text-primary font-medium">{{ testimonial.company }}</p>
                    </div>
                  </div>

                  <!-- Rating -->
                  <div class="flex justify-center mt-6">
                    <div class="flex space-x-1">
                      <svg 
                        v-for="i in 5" 
                        :key="i"
                        class="w-5 h-5 text-yellow-400 fill-current"
                        viewBox="0 0 20 20"
                      >
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation Buttons -->
        <button 
          @click="prevSlide"
          class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-50 rounded-full p-3 shadow-lg transition-all duration-300"
        >
          <svg class="w-6 h-6 text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
        </button>
        
        <button 
          @click="nextSlide"
          class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white hover:bg-gray-50 rounded-full p-3 shadow-lg transition-all duration-300"
        >
          <svg class="w-6 h-6 text-neutral-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
          </svg>
        </button>

        <!-- Dots Indicator -->
        <div class="flex justify-center mt-8 space-x-2">
          <button 
            v-for="(testimonial, index) in testimonials" 
            :key="index"
            @click="currentSlide = index"
            class="w-3 h-3 rounded-full transition-all duration-300"
            :class="currentSlide === index ? 'bg-primary' : 'bg-neutral-300 hover:bg-neutral-400'"
          ></button>
        </div>
      </div>

      <!-- Client Logos -->
      <div class="mt-20" data-aos="fade-up" data-aos-delay="400">
        <h3 class="text-center text-2xl font-semibold text-neutral-600 mb-12">
          Trusted by Leading Companies
        </h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center opacity-60">
          <div 
            v-for="logo in clientLogos" 
            :key="logo.id"
            class="flex justify-center"
          >
            <div class="bg-white rounded-lg p-6 shadow-sm">
              <div class="text-2xl font-bold text-neutral-600">{{ logo.name }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';

const currentSlide = ref(0);
let autoSlideInterval = null;

const testimonials = ref([
  {
    id: 1,
    content: "Arfan Express has been our logistics partner for over 3 years. Their reliability and efficiency have helped us expand our business globally. Highly recommended!",
    name: "Sarah Johnson",
    position: "Supply Chain Manager",
    company: "TechCorp Industries"
  },
  {
    id: 2,
    content: "Outstanding service and competitive pricing. The team at Arfan Express always goes above and beyond to ensure our shipments arrive on time and in perfect condition.",
    name: "Michael Chen",
    position: "Import/Export Director",
    company: "Global Manufacturing Ltd"
  },
  {
    id: 3,
    content: "Their 24/7 tracking system and customer support have given us complete peace of mind. We can focus on our business knowing our logistics are in capable hands.",
    name: "Amanda Rodriguez",
    position: "Operations Manager",
    company: "Fashion Forward Inc"
  }
]);

const clientLogos = ref([
  { id: 1, name: "TechCorp" },
  { id: 2, name: "GlobalMfg" },
  { id: 3, name: "FashionFwd" },
  { id: 4, name: "InnovateLtd" }
]);

const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % testimonials.value.length;
};

const prevSlide = () => {
  currentSlide.value = currentSlide.value === 0 ? testimonials.value.length - 1 : currentSlide.value - 1;
};

onMounted(() => {
  autoSlideInterval = setInterval(nextSlide, 5000);
});

onUnmounted(() => {
  if (autoSlideInterval) {
    clearInterval(autoSlideInterval);
  }
});
</script> 