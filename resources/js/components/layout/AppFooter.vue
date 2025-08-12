<template>
  <footer class="bg-gradient-to-b from-gray-900 via-primary-900 to-gray-900 text-white relative overflow-hidden">
    <!-- Professional background pattern -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary-800/20 to-secondary-800/20 opacity-30"></div>
    
    <!-- Floating professional elements -->
    <div class="absolute inset-0">
      <div 
        v-for="i in 8" 
        :key="i"
        class="absolute w-2 h-2 bg-gradient-to-r from-secondary-400 to-primary-400 rounded-full animate-drift opacity-40"
        :style="getFloatingStyle(i)"
      ></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 py-16">
      <!-- Main Footer Content -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
        
        <!-- Professional Company Info -->
        <div class="space-y-6">
          <div class="flex items-center space-x-4">
            <div class="w-14 h-14 rounded-2xl shadow-2xl flex items-center justify-center relative overflow-hidden bg-white p-2">
              <img 
                :src="logoImage" 
                alt="Arfan Express Limited Logo" 
                class="w-full h-full object-contain"
              />
            </div>
            <div>
              <h3 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-secondary-300 to-primary-300 font-poppins">Arfan Express</h3>
              <p class="text-sm text-gray-300 font-medium tracking-wider">LIMITED</p>
            </div>
          </div>
          <p class="text-gray-300 leading-relaxed text-sm">
            Connecting Global Destinations with reliable freight forwarding solutions. 
            Your trusted logistics partner delivering innovative solutions that empower businesses to succeed worldwide.
          </p>
          <!-- Professional social links -->
          <div class="flex space-x-4">
            <a 
              v-for="social in socialLinks" 
              :key="social.name"
              :href="social.url" 
              class="w-12 h-12 bg-gray-800/50 hover:bg-gradient-to-r hover:from-secondary-600 hover:to-primary-600 rounded-xl flex items-center justify-center transition-all duration-300 hover:scale-110 hover:shadow-xl group"
              :aria-label="social.name"
            >
              <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" v-html="social.iconPath"></svg>
            </a>
          </div>
        </div>

        <!-- Professional Quick Links -->
        <div>
          <h4 class="text-xl font-bold text-white mb-6 relative font-poppins">
            Quick Links
            <div class="absolute bottom-0 left-0 w-16 h-1 bg-gradient-to-r from-secondary-500 to-primary-500 rounded-full"></div>
          </h4>
          <ul class="space-y-4">
            <li v-for="link in quickLinks" :key="link.name">
              <router-link 
                :to="link.path" 
                class="text-gray-300 hover:text-secondary-300 transition-all duration-300 flex items-center group text-sm font-medium"
              >
                <div class="w-2 h-2 bg-secondary-500 rounded-full mr-4 group-hover:w-3 group-hover:bg-primary-400 transition-all duration-300"></div>
                {{ link.name }}
                <svg class="w-4 h-4 ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
              </router-link>
            </li>
          </ul>
        </div>

        <!-- Professional Services -->
        <div>
          <h4 class="text-xl font-bold text-white mb-6 relative font-poppins">
            Our Services
            <div class="absolute bottom-0 left-0 w-16 h-1 bg-gradient-to-r from-secondary-500 to-primary-500 rounded-full"></div>
          </h4>
          <ul class="space-y-4">
            <li v-for="service in services" :key="service.name">
              <div class="text-gray-300 hover:text-secondary-300 transition-all duration-300 flex items-center group cursor-pointer text-sm font-medium">
                <div class="w-8 h-8 bg-gray-800/50 rounded-lg flex items-center justify-center mr-3 group-hover:bg-gradient-to-r group-hover:from-secondary-600 group-hover:to-primary-600 transition-all duration-300">
                  <svg class="w-4 h-4 text-gray-400 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" v-html="service.iconPath"></svg>
                </div>
                {{ service.name }}
              </div>
            </li>
          </ul>
        </div>

        <!-- Professional Contact Info -->
        <div>
          <h4 class="text-xl font-bold text-white mb-6 relative font-poppins">
            Get In Touch
            <div class="absolute bottom-0 left-0 w-16 h-1 bg-gradient-to-r from-secondary-500 to-primary-500 rounded-full"></div>
          </h4>
          <div class="space-y-5">
            <div v-for="contact in contactInfo" :key="contact.type" class="flex items-start space-x-4 group">
              <div class="w-10 h-10 bg-gray-800/50 rounded-xl flex items-center justify-center mt-1 group-hover:bg-gradient-to-r group-hover:from-secondary-600 group-hover:to-primary-600 transition-all duration-300 flex-shrink-0">
                <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24" v-html="contact.iconPath"></svg>
              </div>
              <div class="min-w-0">
                <p class="text-sm text-gray-400 font-medium">{{ contact.label }}</p>
                <!-- Handle phone numbers array -->
                <div v-if="contact.type === 'phone'" class="space-y-1">
                  <p v-for="phone in contact.value" :key="phone" class="text-gray-200 font-semibold text-sm">
                    {{ phone }}
                  </p>
                </div>
                <!-- Handle other contact types -->
                <p v-else class="text-gray-200 font-semibold text-sm break-words">{{ contact.value }}</p>
              </div>
            </div>
          </div>

          <!-- Professional CTA -->
          <div class="mt-8">
            <router-link 
              to="/contact"
              class="group inline-flex items-center bg-gradient-to-r from-secondary-600 to-primary-600 hover:from-secondary-500 hover:to-primary-500 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-2xl hover:scale-105 transition-all duration-300 text-sm"
            >
              Get Free Quote
              <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
            </router-link>
          </div>
        </div>
      </div>

      <!-- Professional Divider -->
      <div class="mt-16 mb-8">
        <div class="h-px bg-gradient-to-r from-transparent via-gray-600 to-transparent"></div>
      </div>

      <!-- Professional Bottom Section -->
      <div class="flex flex-col lg:flex-row justify-between items-center text-gray-400 space-y-4 lg:space-y-0">
        <div class="text-sm font-medium">
          © {{ currentYear }} Arfan Express Limited. All rights reserved. AIN NO: 101080094
        </div>
        <div class="flex flex-wrap justify-center lg:justify-end space-x-8 text-sm">
          <a href="#" class="hover:text-secondary-300 transition-colors duration-300 font-medium">Privacy Policy</a>
          <a href="#" class="hover:text-secondary-300 transition-colors duration-300 font-medium">Terms of Service</a>
          <a href="#" class="hover:text-secondary-300 transition-colors duration-300 font-medium">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue';
import logoImage from '@/assets/images/logo.jpg';

// Professional social media icons with inline SVG paths
const socialLinks = [
  { 
    name: 'Facebook', 
    url: 'https://facebook.com/arfanexpressltd',
    iconPath: '<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>'
  },
  { 
    name: 'LinkedIn', 
    url: 'https://linkedin.com/company/arfan-express-ltd',
    iconPath: '<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>'
  },
  { 
    name: 'Twitter', 
    url: 'https://twitter.com/arfanexpressltd',
    iconPath: '<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>'
  },
  { 
    name: 'Instagram', 
    url: 'https://instagram.com/arfanexpressltd',
    iconPath: '<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>'
  },
];

// Professional navigation links
const quickLinks = [
  { name: 'About Us', path: '/about' },
  { name: 'Our Services', path: '/services' },
  { name: 'Track Shipment', path: '/tracking' },
  { name: 'Office Locations', path: '/contact' },
  { name: 'News & Updates', path: '/news' },
];

// Real Arfan Express services with professional icons
const services = [
  { 
    name: 'Ocean Freight (FCL/LCL)',
    iconPath: '<path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>'
  },
  { 
    name: 'Air Freight',
    iconPath: '<path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/>'
  },
  { 
    name: 'Road Transport',
    iconPath: '<path d="M18.92 6.01C18.72 5.42 18.16 5 17.5 5h-11c-.66 0-1.22.42-1.42 1.01L3 12v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-8l-2.08-5.99z"/>'
  },
  { 
    name: 'Customs Brokerage',
    iconPath: '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>'
  },
  { 
    name: 'Supply Chain Management',
    iconPath: '<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>'
  },
  { 
    name: 'Value-Added Logistics',
    iconPath: '<path d="M9 11H7v6h2v-6zm4 0h-2v6h2v-6zm4 0h-2v6h2v-6zm2.5-5H19V4h-2v2h-1V3c0-.55-.45-1-1-1H9c-.55 0-1 .45-1 1v3H7V4H5v2h-.5C3.67 6 3 6.67 3 7.5S3.67 9 4.5 9H6v8.5c0 .83.67 1.5 1.5 1.5h9c.83 0 1.5-.67 1.5-1.5V9h1.5c.83 0 1.5-.67 1.5-1.5S20.33 6 19.5 6z"/>'
  },
];

// Real Arfan Express contact information from brochure
const contactInfo = [
  {
    type: 'location',
    label: 'Head Office',
    value: 'Dhaka (Gulshan), Bangladesh',
    iconPath: '<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>'
  },
  {
    type: 'phone',
    label: 'Phone Numbers',
    value: [
      '+8801 711 560 112',
      '+8801 722 339 542',
      '+8801 309 287 416',
      '+8801 736 291 401'
    ],
    iconPath: '<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>'
  },
  {
    type: 'email',
    label: 'Email Address',
    value: 'info @arfanexpressbd.com kibria@arfanexpressbd.com motiur@arfanexpressbd.com ',
    iconPath: '<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>'
  },
  {
    type: 'time',
    label: 'Business Hours',
    value: 'Sat-Thu: 9:00 AM - 6:00 PM',
    iconPath: '<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/><path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>'
  },
];

const currentYear = computed(() => new Date().getFullYear());

const getFloatingStyle = (index) => {
  return {
    top: `${10 + Math.random() * 80}%`,
    left: `${10 + Math.random() * 80}%`,
    animationDelay: `${Math.random() * 10}s`,
    animationDuration: `${8 + Math.random() * 8}s`,
  };
};
</script>

<style scoped>
/* Professional floating animation */
@keyframes drift {
  0%, 100% { 
    transform: translateX(0px) translateY(0px) scale(1);
    opacity: 0.4;
  }
  25% { 
    transform: translateX(30px) translateY(-20px) scale(1.2);
    opacity: 0.6;
  }
  50% { 
    transform: translateX(-20px) translateY(15px) scale(0.8);
    opacity: 0.8;
  }
  75% { 
    transform: translateX(15px) translateY(-10px) scale(1.1);
    opacity: 0.5;
  }
}

/* Professional hover animations */
.group:hover svg {
  transform: scale(1.1);
}

/* Enhanced responsive design */
@media (max-width: 768px) {
  .grid {
    grid-template-columns: 1fr;
    gap: 2rem;
  }
  
  .flex.flex-col.lg\\:flex-row {
    text-align: center;
  }
  
  .flex.flex-wrap {
    justify-content: center;
  }
}

/* Professional text selection */
::selection {
  background: rgba(16, 185, 129, 0.2);
  color: #065f46;
}
</style> 