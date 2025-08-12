<template>
  <div ref="contactRef" class="contact-page">
    <!-- Professional Hero Section -->
    <section ref="heroRef" class="py-24 bg-gray-900 text-white overflow-hidden relative">
      <!-- Background Image -->
      <div class="absolute inset-0 z-0">
        <img 
          :src="logisticImage" 
          alt="Contact Arfan Express" 
          class="w-full h-full object-cover opacity-40"
        />
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/40 via-indigo-800/40 to-purple-700/40"></div>
      </div>
      
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10 z-5">
        <div class="absolute top-20 left-10 w-32 h-32 border-2 border-white rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 border border-white rounded-full"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 border-2 border-white rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
          <div ref="heroTitle" class="mb-8">
            <span class="text-sm font-semibold text-blue-300 uppercase tracking-wider mb-2 block">Contact Us</span>
            <h1 class="text-6xl md:text-7xl font-bold mb-6 leading-tight text-white">
              Get In <span class="text-blue-300">Touch</span>
          </h1>
          </div>
          <p ref="heroSubtitle" class="text-2xl md:text-3xl font-light max-w-4xl mx-auto leading-relaxed">
            Ready to optimize your logistics? Let's discuss your global shipping needs and find the perfect solution for your business.
          </p>
        </div>
      </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section ref="mainRef" class="py-24 bg-gradient-to-br from-gray-50 to-white relative">
      <!-- Subtle Background -->
      <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 right-10 w-64 h-64 bg-blue-300 rounded-full"></div>
        <div class="absolute bottom-10 left-10 w-32 h-32 bg-indigo-300 rounded-full"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
          <!-- Enhanced Contact Form -->
          <div ref="formSection">
            <div class="bg-white rounded-3xl shadow-2xl p-10 border border-gray-100">
              <div class="mb-8">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Send Us a Message</h2>
                <p class="text-gray-600 text-lg">
                  Fill out the form below and our logistics experts will get back to you within 24 hours with a customized solution.
                </p>
              </div>
              <ContactForm />
            </div>
          </div>

          <!-- Contact Information with Real Data -->
          <div ref="infoSection" class="space-y-8">
            <!-- Real Office Locations from Brochure -->
            <div class="bg-white rounded-3xl shadow-xl p-10 border border-gray-100">
              <h3 class="text-3xl font-bold text-gray-900 mb-8">Our Office Locations</h3>
            <div class="space-y-8">
                  <div 
                  v-for="(office, index) in offices" 
                    :key="office.id"
                  :ref="el => officeRefs[index] = el"
                  class="group flex items-start hover:transform hover:scale-105 transition-all duration-300"
                  >
                  <div class="flex-shrink-0 w-14 h-14 text-white rounded-xl flex items-center justify-center mr-6 shadow-lg"
                       :class="`bg-gradient-to-r ${office.gradient}`">
                    <span class="text-2xl">{{ office.emoji }}</span>
                    </div>
                  <div class="flex-1">
                    <h4 class="text-xl font-bold text-gray-900 mb-2">{{ office.city }}</h4>
                    <p class="text-gray-600 mb-2 leading-relaxed">{{ office.address }}</p>
                    <div class="flex items-center">
                      <span class="px-3 py-1 text-sm font-medium rounded-full"
                            :class="`bg-gradient-to-r ${office.gradient} text-white`">
                        {{ office.type }}
                      </span>
                    </div>
                  </div>
                </div>
                    </div>
                  </div>

            <!-- Real Contact Details from Brochure -->
            <div class="bg-white rounded-3xl shadow-xl p-10 border border-gray-100">
              <h3 class="text-3xl font-bold text-gray-900 mb-8">Contact Details</h3>
              <div class="space-y-6">
                <div 
                  v-for="(contact, index) in contactDetails" 
                  :key="contact.id"
                  :ref="el => contactRefs[index] = el"
                  class="group flex items-center hover:transform hover:scale-105 transition-all duration-300"
                >
                  <div class="flex-shrink-0 w-12 h-12 text-white rounded-xl flex items-center justify-center mr-6 shadow-lg"
                       :class="`bg-gradient-to-r ${contact.gradient}`">
                    <span class="text-xl">{{ contact.emoji }}</span>
                    </div>
                    <div>
                    <p class="font-bold text-gray-900 text-lg">{{ contact.label }}</p>
                    <!-- Handle phone numbers array -->
                    <div v-if="contact.id === 1" class="space-y-1">
                      <p v-for="phone in contact.value" :key="phone" class="text-gray-600 font-semibold text-sm">
                        {{ phone }}
                      </p>
                    </div>
                    <!-- Handle email addresses array -->
                    <div v-else-if="contact.id === 2" class="space-y-1">
                      <p v-for="email in contact.value" :key="email" class="text-gray-600 font-semibold text-sm">
                        {{ email }}
                      </p>
                    </div>
                    <!-- Handle other contact types -->
                    <p v-else class="text-gray-600" v-html="contact.value"></p>
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </section>

    <!-- Enhanced Map Section -->
    <section ref="mapRef" class="py-24 bg-white">
      <div class="container mx-auto px-6">
        <div ref="mapHeader" class="text-center mb-16">
          <span class="text-sm font-semibold text-blue-600 uppercase tracking-wider mb-2 block">Our Locations</span>
          <h2 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Find Us on the <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-indigo-600">Map</span>
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto font-light">
            Visit our offices across Bangladesh or contact us for directions to the nearest location
          </p>
        </div>
        <div class="bg-gradient-to-br from-gray-100 to-gray-50 rounded-3xl shadow-xl border border-gray-200 relative overflow-hidden p-6">
          <OfficeMap :locations="mapLocations" />
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick } from 'vue';
import { gsap, ScrollTrigger } from '@/utils/gsap';
import ContactForm from '../components/common/ContactForm.vue';
import OfficeMap from '../components/common/OfficeMap.vue';

// Import background image
import logisticImage from '@/assets/images/logistic.jpg';

// Template refs
const contactRef = ref(null);
const heroRef = ref(null);
const heroTitle = ref(null);
const heroSubtitle = ref(null);
const mainRef = ref(null);
const formSection = ref(null);
const infoSection = ref(null);
const ctaSection = ref(null);
const ctaButton = ref(null);
const mapRef = ref(null);
const mapHeader = ref(null);
const mapContainer = ref(null);
const officeRefs = ref([]);
const contactRefs = ref([]);

// Real office locations from Arfan Express brochure
const offices = ref([
  {
    id: 1,
    city: "Dhaka Corporate Office",
    address: "Azhar Comfort Complex (9th Floor), GA-130/A, Progoti Shoroni, Gulshan-01, Dhaka-1212",

    emoji: "🏢",
    
  },
  {
    id: 2,
    city: "Chittagong Office",
    address: "Faruk Chamber (10th Floor)1403, Shek Mujib Road, Agrabad, Chittagong CIA-4100",

    emoji: "🏬",
    
  },
  {
    id: 3,
    city: "Khulna Office",
    address: "Dr. Rahman Plaza, 1403, 15, KDA Avenue, Sheikhpapa, Khulna-9100",
   
    emoji: "🏪",
  
  }
]);


const contactDetails = ref([
  {
    id: 1,
    label: "Phone Numbers",
    value: [
      '+8801 711 560 112',
      '+8801 722 339 542',
      '+8801 309 287 416',
      '+8801 736 291 401'
    ],
    emoji: "📞",
    gradient: "from-green-500 to-green-600"
  },
  {
    id: 2,
    label: "Email Addresses",
    value: [
      "info@arfanexpressbd.com",
      "motiur@arfanexpressbd.com", 
      "kibria@arfanexpressbd.com"
    ],
    emoji: "📧",
    gradient: "from-blue-500 to-blue-600"
  },
  {
    id: 3,
    label: "Business Registration",
    value: "AIN NO: 101080094",
    emoji: "📄",
    gradient: "from-purple-500 to-purple-600"
  },
  {
    id: 4,
    label: "Business Hours",
    value: "Sunday - Thursday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM<br>Friday: Closed",
    emoji: "🕒",
    gradient: "from-orange-500 to-orange-600"
  }
]);

const mapLocations = [
  {
    id: 1,
    city: 'Dhaka Corporate Office',
    address: 'Azhar Comfort Complex (9th Floor), GA-130/A, Progoti Shoroni, Gulshan-01, Dhaka-1212',
    lat: 23.7925,
    lng: 90.4078
  },
  {
    id: 2,
    city: 'Chittagong Office',
    address: 'Dr. Rahman Plaza, 1403, Shek Mujib Road, Agrabad, Chittagong CIA-4100',
    lat: 22.3364,
    lng: 91.8317
  },
  {
    id: 3,
    city: 'Khulna Office',
    address: 'Faruk Chamber (10th Floor), 15, KDA Avenue, Sheikhpapa, Khulna-9100',
    lat: 22.8456,
    lng: 89.5403
  }
];

const initProfessionalAnimations = () => {
  // Hero Section Animation
  gsap.set([heroTitle.value, heroSubtitle.value], { opacity: 0, y: 60 });
  gsap.timeline()
    .to(heroTitle.value, {
      opacity: 1,
      y: 0,
      duration: 1.2,
      ease: "power3.out"
    })
    .to(heroSubtitle.value, {
      opacity: 1,
      y: 0,
      duration: 0.8,
      ease: "power2.out"
    }, "-=0.6");

  // Main Section ScrollTrigger
  gsap.set([formSection.value, infoSection.value], { opacity: 0, y: 80 });
  gsap.timeline({
    scrollTrigger: {
      trigger: mainRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(formSection.value, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power3.out"
  })
  .to(infoSection.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out"
  }, "-=0.5");

  // Stagger office and contact animations
  gsap.set([...officeRefs.value, ...contactRefs.value], { opacity: 0, x: 30 });
  gsap.to([...officeRefs.value, ...contactRefs.value], {
    opacity: 1,
    x: 0,
    duration: 0.6,
    stagger: 0.1,
    ease: "power2.out",
    scrollTrigger: {
      trigger: infoSection.value,
      start: "top 80%",
      toggleActions: "play none none reverse"
    }
  });

  // CTA Section
  gsap.set(ctaSection.value, { opacity: 0, scale: 0.9 });
  gsap.to(ctaSection.value, {
    opacity: 1,
    scale: 1,
    duration: 0.8,
    ease: "back.out(1.7)",
    scrollTrigger: {
      trigger: ctaSection.value,
      start: "top 85%",
      toggleActions: "play none none reverse"
    }
  });

  // Map Section
  gsap.set([mapHeader.value, mapContainer.value], { opacity: 0, y: 60 });
  gsap.timeline({
    scrollTrigger: {
      trigger: mapRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(mapHeader.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out"
  })
  .to(mapContainer.value, {
    opacity: 1,
    y: 0,
    duration: 0.6,
    ease: "power2.out"
  }, "-=0.3");

  // Enhanced CTA button hover effect
  if (ctaButton.value) {
    if (Array.isArray(ctaButton.value)) {
      ctaButton.value.forEach(btn => {
        if (btn && btn instanceof HTMLElement) {
          btn.addEventListener('mouseenter', () => {
            gsap.to(btn, {
              scale: 1.05,
              y: -2,
              duration: 0.3,
              ease: "power2.out"
            });
          });
          btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
              scale: 1,
              y: 0,
              duration: 0.3,
              ease: "power2.out"
            });
          });
        }
      });
    } else if (ctaButton.value instanceof HTMLElement) {
      ctaButton.value.addEventListener('mouseenter', () => {
        gsap.to(ctaButton.value, {
          scale: 1.05,
          y: -2,
          duration: 0.3,
          ease: "power2.out"
        });
      });
      ctaButton.value.addEventListener('mouseleave', () => {
        gsap.to(ctaButton.value, {
          scale: 1,
          y: 0,
          duration: 0.3,
          ease: "power2.out"
        });
      });
    }
  }
};

onMounted(() => {
  nextTick(() => {
    setTimeout(() => {
      initProfessionalAnimations();
    }, 300);
  });
});
</script>

<style scoped>
.contact-page {
  min-height: 100vh;
}

/* Enhanced hover effects */
.group:hover .relative::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
  transition: left 0.6s;
}

.group:hover .relative::before {
  left: 100%;
}
</style> 