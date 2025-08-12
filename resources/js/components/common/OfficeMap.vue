<template>
  <div class="w-full">
    <!-- Location Selector Buttons -->
    <div class="flex flex-wrap justify-center mb-6 gap-3">
      <button
        v-for="(loc, idx) in locations"
        :key="loc.id"
        :class="[
          'px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105',
          idx === selectedIndex 
            ? 'bg-gradient-to-r from-blue-600 to-indigo-700 text-white shadow-lg' 
            : 'bg-white text-blue-700 border-2 border-blue-200 hover:bg-blue-50 hover:border-blue-300'
        ]"
        @click="selectLocation(idx)"
      >
        <div class="flex items-center space-x-2">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
          </svg>
          <span>{{ getShortCityName(loc.city) }}</span>
        </div>
      </button>
    </div>
    
    <!-- Google Maps Embed Container -->
    <div class="relative">
      <div class="w-full h-96 rounded-2xl shadow-xl border border-gray-200 overflow-hidden bg-gray-100">
        <!-- Loading indicator -->
        <div v-if="!mapLoaded" class="absolute inset-0 flex items-center justify-center bg-gray-100 z-10">
          <div class="text-center">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-primary-600 mx-auto mb-4"></div>
            <p class="text-gray-600 font-medium">Loading map...</p>
          </div>
        </div>
        
        <!-- Embedded Google Maps -->
        <iframe 
          :src="currentEmbedUrl"
          width="100%" 
          height="100%" 
          style="border:0; border-radius: 1rem;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade"
          @load="mapLoaded = true"
          class="w-full h-full"
        ></iframe>
      </div>
    </div>
    
    <!-- Selected Location Info -->
    <div class="mt-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-200">
      <div class="flex items-start space-x-4">
        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H3m2 0h4M9 7h6m-6 4h6m-6 4h6"/>
          </svg>
        </div>
        <div class="flex-1">
          <h3 class="text-xl font-bold text-gray-900 mb-2">{{ currentLocation.city }}</h3>
          <p class="text-gray-800 leading-relaxed">{{ currentLocation.address }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
  locations: {
    type: Array,
    required: true
  },
  initialIndex: {
    type: Number,
    default: 0
  }
});

const emit = defineEmits(['location-change']);

const selectedIndex = ref(props.initialIndex);
const mapLoaded = ref(false);

const currentLocation = computed(() => props.locations[selectedIndex.value]);

// Helper function to get short city names
const getShortCityName = (cityName) => {
  return cityName.replace(' Corporate Office', '').replace(' Office', '').replace('Corporate ', '');
};

// Google Maps embed URLs for each office location
const embedUrls = {
  0: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0261415496325!2d90.42057208208863!3d23.78208342359615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c796bfe2bdc7%3A0xcff45f68c4ad3a3e!2sAzhar%20Comfort%20Complex%2C%20Bir%20Uttam%20Rafiqul%20Islam%20Ave%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1753278258677!5m2!1sen!2sbd', // Dhaka
  1: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.5229191492026!2d91.80965427541236!3d22.333875779662417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8c820eed397%3A0x27efccba6d19e160!2sFaruk%20Chamber!5e0!3m2!1sen!2sbd!4v1753278149715!5m2!1sen!2sbd', // Chittagong
  2: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.601883135268!2d89.54885278189668!3d22.817211225991713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff900422f8c9e9%3A0x7d0cbafc14e3a463!2sKDA%20Ave%2C%20Khulna!5e0!3m2!1sen!2sbd!4v1753278224831!5m2!1sen!2sbd' // Khulna
};

const currentEmbedUrl = computed(() => embedUrls[selectedIndex.value]);

const selectLocation = (idx) => {
  selectedIndex.value = idx;
  emit('location-change', props.locations[idx]);
  mapLoaded.value = false; // Reset loading state for new map
};
</script>

<style scoped>
/* Ensure iframe has proper styling */
iframe {
  width: 100%;
  height: 100%;
  border-radius: 1rem;
}
</style> 