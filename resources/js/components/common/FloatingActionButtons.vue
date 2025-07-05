<template>
  <div ref="fabRef" class="fixed bottom-6 right-6 z-40 flex flex-col space-y-4">
    <!-- Professional WhatsApp Button -->
    <div class="group relative">
    <a 
        :href="`https://wa.me/8801711560113`"
      target="_blank"
        rel="noopener noreferrer"
        class="group/btn relative bg-gradient-to-r from-green-500 to-green-600 hover:from-green-400 hover:to-green-500 text-white p-4 rounded-2xl shadow-2xl hover:shadow-green-500/25 transition-all duration-500 transform hover:scale-110 hover:-translate-y-1 flex items-center justify-center overflow-hidden"
        title="Chat with us on WhatsApp"
        @mouseenter="onButtonHover"
        @mouseleave="onButtonLeave"
      >
        <!-- Button background animation -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
        
        <!-- WhatsApp Icon -->
        <svg class="w-7 h-7 relative z-10 transition-transform duration-300 group-hover/btn:rotate-12" fill="currentColor" viewBox="0 0 24 24">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
      </svg>

        <!-- Pulse animation -->
        <div class="absolute inset-0 bg-green-400 rounded-2xl animate-ping opacity-20"></div>
      </a>
      
      <!-- Professional Tooltip -->
      <div class="group-hover:opacity-100 group-hover:visible opacity-0 invisible absolute right-full mr-4 top-1/2 transform -translate-y-1/2 transition-all duration-300">
        <div class="bg-gray-900 text-white text-sm px-4 py-3 rounded-xl shadow-xl whitespace-nowrap relative">
          <div class="font-semibold">WhatsApp Chat</div>
          <div class="text-xs text-gray-300">+880 171 1560 113</div>
          <!-- Arrow -->
          <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-l-8 border-l-gray-900 border-t-4 border-t-transparent border-b-4 border-b-transparent"></div>
        </div>
      </div>
    </div>

    <!-- Professional Call Button -->
    <div class="group relative">
      <a 
        :href="`tel:+8801711560113`"
        class="group/btn relative bg-gradient-to-r from-primary-600 to-primary-700 hover:from-primary-500 hover:to-primary-600 text-white p-4 rounded-2xl shadow-2xl hover:shadow-primary-500/25 transition-all duration-500 transform hover:scale-110 hover:-translate-y-1 flex items-center justify-center overflow-hidden"
        title="Call us now"
        @mouseenter="onButtonHover"
        @mouseleave="onButtonLeave"
      >
        <!-- Button background animation -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
        
        <!-- Phone Icon -->
        <svg class="w-7 h-7 relative z-10 transition-transform duration-300 group-hover/btn:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
      </svg>

        <!-- Pulse animation -->
        <div class="absolute inset-0 bg-primary-400 rounded-2xl animate-ping opacity-20 animation-delay-1000"></div>
      </a>
      
      <!-- Professional Tooltip -->
      <div class="group-hover:opacity-100 group-hover:visible opacity-0 invisible absolute right-full mr-4 top-1/2 transform -translate-y-1/2 transition-all duration-300">
        <div class="bg-gray-900 text-white text-sm px-4 py-3 rounded-xl shadow-xl whitespace-nowrap relative">
          <div class="font-semibold">Call Now</div>
          <div class="text-xs text-gray-300">+880 171 1560 113</div>
          <!-- Arrow -->
          <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-l-8 border-l-gray-900 border-t-4 border-t-transparent border-b-4 border-b-transparent"></div>
        </div>
      </div>
    </div>

    <!-- Professional Email Button -->
    <div class="group relative">
      <a 
        :href="`mailto:info@arfanexpressbd.com`"
        class="group/btn relative bg-gradient-to-r from-secondary-600 to-secondary-700 hover:from-secondary-500 hover:to-secondary-600 text-white p-4 rounded-2xl shadow-2xl hover:shadow-secondary-500/25 transition-all duration-500 transform hover:scale-110 hover:-translate-y-1 flex items-center justify-center overflow-hidden"
        title="Send us an email"
        @mouseenter="onButtonHover"
        @mouseleave="onButtonLeave"
      >
        <!-- Button background animation -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
        
        <!-- Email Icon -->
        <svg class="w-7 h-7 relative z-10 transition-transform duration-300 group-hover/btn:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>

        <!-- Pulse animation -->
        <div class="absolute inset-0 bg-secondary-400 rounded-2xl animate-ping opacity-20 animation-delay-2000"></div>
      </a>
      
      <!-- Professional Tooltip -->
      <div class="group-hover:opacity-100 group-hover:visible opacity-0 invisible absolute right-full mr-4 top-1/2 transform -translate-y-1/2 transition-all duration-300">
        <div class="bg-gray-900 text-white text-sm px-4 py-3 rounded-xl shadow-xl whitespace-nowrap relative">
          <div class="font-semibold">Email Us</div>
          <div class="text-xs text-gray-300">info@arfanexpressbd.com</div>
          <!-- Arrow -->
          <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-l-8 border-l-gray-900 border-t-4 border-t-transparent border-b-4 border-b-transparent"></div>
        </div>
      </div>
    </div>

    <!-- Professional Quote Button -->
    <div class="group relative">
      <router-link 
        to="/contact"
        class="group/btn relative bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-400 hover:to-orange-500 text-white p-4 rounded-2xl shadow-2xl hover:shadow-orange-500/25 transition-all duration-500 transform hover:scale-110 hover:-translate-y-1 flex items-center justify-center overflow-hidden"
        title="Get a free quote"
        @mouseenter="onButtonHover"
        @mouseleave="onButtonLeave"
      >
        <!-- Button background animation -->
        <div class="absolute inset-0 bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
        
        <!-- Quote Icon -->
        <svg class="w-7 h-7 relative z-10 transition-transform duration-300 group-hover/btn:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
        </svg>

        <!-- Pulse animation -->
        <div class="absolute inset-0 bg-orange-400 rounded-2xl animate-ping opacity-20 animation-delay-3000"></div>
      </router-link>
      
      <!-- Professional Tooltip -->
      <div class="group-hover:opacity-100 group-hover:visible opacity-0 invisible absolute right-full mr-4 top-1/2 transform -translate-y-1/2 transition-all duration-300">
        <div class="bg-gray-900 text-white text-sm px-4 py-3 rounded-xl shadow-xl whitespace-nowrap relative">
          <div class="font-semibold">Free Quote</div>
          <div class="text-xs text-gray-300">Get instant pricing</div>
          <!-- Arrow -->
          <div class="absolute left-full top-1/2 transform -translate-y-1/2 border-l-8 border-l-gray-900 border-t-4 border-t-transparent border-b-4 border-b-transparent"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';
import { gsap } from 'gsap';

// Template refs
const fabRef = ref(null);

// Professional animation functions
const onButtonHover = (event) => {
  gsap.to(event.currentTarget, {
    scale: 1.15,
    y: -8,
    duration: 0.3,
    ease: "back.out(1.7)"
  });
};

const onButtonLeave = (event) => {
  gsap.to(event.currentTarget, {
    scale: 1,
    y: 0,
    duration: 0.3,
    ease: "power2.out"
  });
};

const initFABAnimations = () => {
  // Staggered entrance animation
  const buttons = fabRef.value?.children || [];
  
  gsap.from(buttons, {
    opacity: 0,
    x: 100,
    scale: 0.5,
    duration: 0.6,
    stagger: 0.1,
    ease: "back.out(1.7)",
    delay: 1.5
  });

  // Floating animation for buttons
  Array.from(buttons).forEach((button, index) => {
    gsap.to(button, {
      y: -5,
      duration: 2 + (index * 0.3),
      repeat: -1,
      yoyo: true,
      ease: "power1.inOut",
      delay: index * 0.2
    });
  });
};

onMounted(() => {
  nextTick(() => {
    initFABAnimations();
  });
});
</script> 

<style scoped>
/* Professional animation delays */
.animation-delay-1000 {
  animation-delay: 1s;
}

.animation-delay-2000 {
  animation-delay: 2s;
}

.animation-delay-3000 {
  animation-delay: 3s;
}

/* Enhanced hover effects */
.group:hover .group-hover\\:opacity-100 {
  opacity: 1;
}

.group:hover .group-hover\\:visible {
  visibility: visible;
}

/* Professional pulse animation */
@keyframes professional-pulse {
  0% {
    transform: scale(1);
    opacity: 0.3;
  }
  70% {
    transform: scale(1.4);
    opacity: 0;
  }
  100% {
    transform: scale(1.4);
    opacity: 0;
  }
}

.animate-ping {
  animation: professional-pulse 2s cubic-bezier(0, 0, 0.2, 1) infinite;
}

/* Professional button hover states */
.group\/btn:hover {
  transform: translateY(-4px) scale(1.05);
}

/* Professional tooltip animations */
.group:hover > div:last-child {
  animation: slideInLeft 0.3s ease-out;
}

@keyframes slideInLeft {
  0% {
    opacity: 0;
    transform: translateX(10px) translateY(-50%);
  }
  100% {
    opacity: 1;
    transform: translateX(0) translateY(-50%);
  }
}

/* Mobile responsive adjustments */
@media (max-width: 640px) {
  .fixed.bottom-6.right-6 {
    bottom: 1rem;
    right: 1rem;
  }
  
  .group\/btn {
    padding: 0.75rem;
  }
  
  .group\/btn svg {
    width: 1.25rem;
    height: 1.25rem;
  }
}
</style> 