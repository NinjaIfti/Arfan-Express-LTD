<template>
  <div ref="aboutRef" class="about-page">
    <!-- Modern Hero Section with Background Image -->
    <section ref="heroRef" class="relative h-96 md:h-[500px] flex items-center bg-gray-900 text-white overflow-hidden">
      <!-- Background Image -->
      <div class="absolute inset-0 z-0">
        <img 
          :src="whoweImage" 
          alt="About Arfan Express" 
          class="w-full h-full object-cover opacity-40"
          @error="handleImageError"
          @load="handleImageLoad"
        />
        <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-indigo-900/70 to-purple-900/80"></div>
      </div>
      
      <!-- Modern Background Pattern -->
      <div class="absolute inset-0 opacity-10 z-5">
        <div class="absolute top-20 left-10 w-32 h-32 border-2 border-white rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 border border-white rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 border-2 border-white rounded-full transform -translate-x-1/2 -translate-y-1/2 animate-pulse" style="animation-delay: 2s;"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <div class="text-center">
          <div ref="heroContent" class="space-y-8 max-w-5xl mx-auto">
            <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 shadow-lg">
              <div class="w-3 h-3 bg-blue-400 rounded-full mr-3 animate-pulse"></div>
              <span class="text-sm font-semibold text-blue-200 uppercase tracking-wider">About Our Company</span>
            </div>
            
            <div ref="heroTitle" class="space-y-6">
              <h1 class="text-5xl lg:text-7xl font-bold leading-tight">
              <span class="text-white">Arfan Express</span>
              <br>
                <span class="text-3xl lg:text-4xl font-light bg-gradient-to-r from-blue-200 to-indigo-200 bg-clip-text text-transparent">LIMITED</span>
            </h1>
          </div>
            
            <p ref="heroSubtitle" class="text-xl lg:text-2xl font-light max-w-4xl mx-auto leading-relaxed text-blue-100">
            Leading freight forwarding company dedicated to delivering reliable and cost-efficient logistics services worldwide
          </p>
            
            <!-- Modern Stats Row -->
           
          </div>
        </div>
      </div>
    </section>

    <!-- Redesigned Company Story Section -->
    <section ref="storyRef" class="py-32 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
      <!-- Modern Background Pattern -->
      <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle at 20% 20%, #3b82f6 0%, transparent 50%), radial-gradient(circle at 80% 80%, #8b5cf6 0%, transparent 50%);"></div>
      </div>
      
      <!-- Floating Geometric Shapes -->
      <div class="absolute top-20 right-10 w-32 h-32 bg-gradient-to-br from-blue-200/30 to-indigo-200/30 rounded-2xl transform rotate-45"></div>
      <div class="absolute bottom-20 left-10 w-24 h-24 bg-gradient-to-br from-purple-200/30 to-pink-200/30 rounded-full"></div>
      
      <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
          <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-full border border-blue-200/50 shadow-sm mb-6">
            <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
            <span class="text-sm font-semibold text-blue-700 tracking-wide">Our Journey</span>
          </div>
          <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-4 leading-tight">
                Connecting Global
            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent"> Destinations</span>
              </h2>
            </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
          <!-- Story Content -->
          <div ref="storyContent" class="lg:col-span-7 space-y-8">
            <!-- Key Message -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
              <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                  <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-gray-900 mb-4">Leading the Industry</h3>
                  <p class="text-lg text-gray-600 leading-relaxed">
                Arfan Express Ltd is a leading freight forwarding company dedicated to delivering 
                reliable and cost-efficient logistics services worldwide.
              </p>
                </div>
              </div>
            </div>

            <!-- Experience & Expertise -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
              <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                  <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-gray-900 mb-4">Complete Solutions</h3>
                  <p class="text-lg text-gray-600 leading-relaxed">
                With years of experience in the industry, we specialize in sea, air, and road freight, 
                providing end-to-end solutions to streamline your supply chain. Our global network and 
                cutting-edge technology ensure that your cargo reaches its destination on time and without hassle.
              </p>
                </div>
              </div>
            </div>

            <!-- Customer Focus -->
            <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
              <div class="flex items-start space-x-4">
                <div class="flex-shrink-0">
                  <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-violet-600 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                  </div>
                </div>
                <div>
                  <h3 class="text-2xl font-bold text-gray-900 mb-4">Trusted Partnerships</h3>
                  <p class="text-lg text-gray-600 leading-relaxed">
                From small businesses to large enterprises, we've built lasting relationships based on 
                trust, reliability, and exceptional service delivery that addresses our customers' unique pain points.
              </p>
            </div>
          </div>
            </div>
          </div>

          <!-- Visual Side -->
          <div ref="storyVisual" class="lg:col-span-5">
            <div class="sticky top-8 space-y-6">
              <!-- Main Visual Card -->
              <div class="bg-gradient-to-br from-blue-600 via-indigo-600 to-purple-700 rounded-3xl p-8 text-white shadow-2xl transform hover:scale-105 transition-all duration-500">
                <div class="text-center space-y-6">
                  <div class="w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mx-auto">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  </div>
                  <div>
                    <h3 class="text-3xl font-bold mb-3">Global Network</h3>
                    <p class="text-lg opacity-90">Connecting businesses across continents with seamless logistics solutions</p>
                  </div>
                </div>
              </div>

              <!-- Stats Grid -->
              <div class="grid grid-cols-2 gap-4">
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow duration-300">
                  <div class="text-3xl font-bold text-blue-600 mb-2">150+</div>
                  <div class="text-sm text-gray-600 font-medium">Countries Served</div>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 text-center hover:shadow-xl transition-shadow duration-300">
                  <div class="text-3xl font-bold text-indigo-600 mb-2">24/7</div>
                  <div class="text-sm text-gray-600 font-medium">Customer Support</div>
                </div>
              </div>

              <!-- Achievement Badge -->
              <div class="bg-gradient-to-r from-emerald-500 to-green-600 rounded-2xl p-6 text-white text-center shadow-lg">
                <div class="flex items-center justify-center space-x-3">
                  <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                  </svg>
                  <span class="text-lg font-semibold">ISO Certified Excellence</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Redesigned Mission, Vision, Values Section -->
    <section ref="valuesRef" class="py-32 bg-white relative overflow-hidden">
      <!-- Modern Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-bl from-blue-50/50 via-transparent to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-full bg-gradient-to-tr from-indigo-50/50 via-transparent to-transparent"></div>
      </div>
      
      <!-- Floating Decorative Elements -->
      <div class="absolute top-40 right-20 w-20 h-20 bg-blue-100/30 rounded-full blur-xl"></div>
      <div class="absolute bottom-40 left-20 w-32 h-32 bg-indigo-100/30 rounded-full blur-xl"></div>
      
      <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div ref="valuesHeader" class="text-center mb-24">
          <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-full border border-blue-200/50 shadow-sm mb-8">
            <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <span class="text-sm font-semibold text-blue-700 tracking-wide">Our Foundation</span>
          </div>
          <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Driving <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Excellence</span>
          </h2>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto font-light leading-relaxed">
            Our values, mission, and vision guide every decision we make and every service we provide
          </p>
        </div>

        <!-- Values Grid with Modern Card Design -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
          <!-- Mission Card -->
          <div ref="missionCard" class="group relative">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 lg:p-10 border border-blue-100/50 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 h-full">
              <!-- Icon Header -->
              <div class="flex flex-col items-center text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-500">
                  <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                  </svg>
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">Our Mission</h3>
              </div>
              
              <!-- Content -->
              <div class="text-center space-y-4">
                <p class="text-lg text-gray-700 leading-relaxed">
                To simplify global logistics through cost-effective, reliable, and tailored solutions 
                that address our customers' pain points, ensuring timely delivery and seamless operations.
              </p>
                
                <!-- Key Points -->
                <div class="pt-6 space-y-3">
                  <div class="flex items-center justify-center text-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Cost-Effective Solutions</span>
                  </div>
                  <div class="flex items-center justify-center text-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Reliable Operations</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Vision Card -->
          <div ref="visionCard" class="group relative">
            <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-3xl p-8 lg:p-10 border border-indigo-100/50 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 h-full">
              <!-- Icon Header -->
              <div class="flex flex-col items-center text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-500">
                  <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                  </svg>
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">Our Vision</h3>
              </div>
              
              <!-- Content -->
              <div class="text-center space-y-4">
                <p class="text-lg text-gray-700 leading-relaxed">
                To be the global leader in freight forwarding, delivering innovative logistics solutions 
                that empower businesses to succeed in the global marketplace.
              </p>
                
                <!-- Key Points -->
                <div class="pt-6 space-y-3">
                  <div class="flex items-center justify-center text-indigo-700">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Global Leadership</span>
                  </div>
                  <div class="flex items-center justify-center text-indigo-700">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-medium">Innovation Focus</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Values Card -->
          <div ref="valuesCard" class="group relative">
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 lg:p-10 border border-purple-100/50 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 h-full">
              <!-- Icon Header -->
              <div class="flex flex-col items-center text-center mb-8">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-500">
                  <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                  </svg>
                </div>
                <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">Our Values</h3>
              </div>
              
              <!-- Content -->
              <div class="space-y-6">
              <div class="space-y-4">
                  <div class="flex items-center">
                    <div class="w-4 h-4 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mr-4 flex-shrink-0"></div>
                    <span class="font-semibold text-gray-800">Reliability & Trust</span>
                  </div>
                  <div class="flex items-center">
                    <div class="w-4 h-4 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full mr-4 flex-shrink-0"></div>
                    <span class="font-semibold text-gray-800">Innovation & Excellence</span>
                  </div>
                  <div class="flex items-center">
                    <div class="w-4 h-4 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mr-4 flex-shrink-0"></div>
                    <span class="font-semibold text-gray-800">Customer-Centric Approach</span>
                </div>
                  <div class="flex items-center">
                    <div class="w-4 h-4 bg-gradient-to-r from-green-500 to-blue-500 rounded-full mr-4 flex-shrink-0"></div>
                    <span class="font-semibold text-gray-800">Global Connectivity</span>
                </div>
                </div>
                
                <!-- Bottom accent -->
                <div class="pt-4 border-t border-purple-200/50">
                  <p class="text-center text-sm text-gray-600 font-medium">
                    Guiding every decision we make
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Redesigned Why Choose Us Section -->
    <section ref="whyUsRef" class="py-32 bg-gradient-to-br from-gray-50 via-blue-50/30 to-indigo-50/30 relative overflow-hidden">
      <!-- Modern Background Pattern -->
      <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-100/20 via-transparent to-indigo-100/20"></div>
        <div class="absolute top-20 right-20 w-64 h-64 bg-gradient-to-br from-blue-200/20 to-indigo-200/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-gradient-to-br from-indigo-200/20 to-purple-200/20 rounded-full blur-3xl"></div>
      </div>
      
      <div class="container mx-auto px-6 relative z-10">
        <!-- Section Header -->
        <div ref="whyUsHeader" class="text-center mb-20">
          <div class="inline-flex items-center px-6 py-3 bg-white/80 backdrop-blur-sm rounded-full border border-blue-200/50 shadow-sm mb-8">
            <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
            </svg>
            <span class="text-sm font-semibold text-blue-700 tracking-wide">Why Choose Us</span>
          </div>
          <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
            Unmatched <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Expertise</span>
          </h2>
          <p class="text-xl text-gray-600 max-w-4xl mx-auto font-light leading-relaxed">
            Discover what sets us apart in the competitive world of global logistics
          </p>
        </div>

        <!-- Features Grid with Enhanced Design -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div 
            v-for="(feature, index) in features" 
            :key="feature.id"
            :ref="el => featureRefs[index] = el"
            class="group relative"
          >
            <!-- Main Card -->
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-white/50 h-full relative overflow-hidden">
              <!-- Background Gradient Overlay -->
              <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 via-transparent to-indigo-50/50 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
              
              <!-- Content -->
              <div class="relative z-10 text-center">
                <!-- Icon with Enhanced Design -->
              <div class="flex justify-center mb-6">
                  <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-all duration-500 group-hover:shadow-xl">
                      <component :is="feature.icon" class="w-8 h-8 text-white" />
                    </div>
                    <!-- Floating ring effect -->
                    <div class="absolute inset-0 rounded-2xl border-2 border-blue-300/30 scale-110 opacity-0 group-hover:opacity-100 group-hover:scale-125 transition-all duration-500"></div>
                  </div>
                </div>
                
                <!-- Title -->
                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-700 transition-colors duration-300">
                  {{ feature.title }}
                </h3>
                
                <!-- Description -->
                <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                  {{ feature.description }}
                </p>
                
                <!-- Bottom accent line -->
                <div class="mt-6 w-12 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full mx-auto transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Bottom Stats Section -->
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-blue-600 mb-2">99.9%</div>
            <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Success Rate</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-indigo-600 mb-2">24/7</div>
            <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Support</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-purple-600 mb-2">48H</div>
            <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Response Time</div>
          </div>
          <div class="text-center">
            <div class="text-3xl lg:text-4xl font-bold text-green-600 mb-2">ISO</div>
            <div class="text-sm text-gray-600 font-medium uppercase tracking-wide">Certified</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Partners Section -->
    <section class="py-24 bg-white relative">
      <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
          <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-full border border-blue-200/50 shadow-sm mb-8">
            <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
            <span class="text-sm font-semibold text-blue-700 tracking-wide">Our Partners</span>
          </div>
          <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
            Trusted <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Partnerships</span>
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto font-light leading-relaxed">
            We're proud members of leading logistics organizations, ensuring global standards and reliable partnerships
          </p>
        </div>

        <!-- Partners Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto">
          <!-- BAFFA Partner -->
          <div class="group">
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 text-center h-full flex flex-col justify-between">
              <div>
                <div class="mb-6 flex justify-center">
                  <div class="w-32 h-32 flex items-center justify-center bg-gray-50 rounded-2xl group-hover:bg-blue-50 transition-colors duration-300">
                    <img 
                      :src="partner1Image" 
                      alt="Bangladesh Freight Forwarders Association (BAFFA)" 
                      class="max-w-full max-h-full object-contain filter group-hover:brightness-110 transition-all duration-300"
                    />
                  </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">BAFFA</h3>
                <p class="text-gray-600 leading-relaxed">
                  Bangladesh Freight Forwarders Association - Supporting the growth and development of freight forwarding industry in Bangladesh
                </p>
              </div>
              <div class="mt-6 pt-4 border-t border-gray-100">
                <span class="inline-flex items-center text-sm font-medium text-blue-600">
                  <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  Certified Member
                </span>
              </div>
            </div>
          </div>

          <!-- GLA Partner -->
          <div class="group">
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 text-center h-full flex flex-col justify-between">
              <div>
                <div class="mb-6 flex justify-center">
                  <div class="w-32 h-32 flex items-center justify-center bg-gray-50 rounded-2xl group-hover:bg-blue-50 transition-colors duration-300">
                    <img 
                      :src="partner2Image" 
                      alt="Global Logistics Alliance (GLA)" 
                      class="max-w-full max-h-full object-contain filter group-hover:brightness-110 transition-all duration-300"
                    />
                  </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">GLA</h3>
                <p class="text-gray-600 leading-relaxed">
                  Global Logistics Alliance - Connecting logistics professionals worldwide through a trusted network of independent freight forwarders
                </p>
              </div>
              <div class="mt-6 pt-4 border-t border-gray-100">
                <span class="inline-flex items-center text-sm font-medium text-blue-600">
                  <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                  Network Partner
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Partnership Benefits -->
        <div class="mt-16 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-3xl p-8 border border-blue-100">
          <div class="text-center">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Partnership Benefits</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
              <div class="flex items-center justify-center space-x-3">
                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                  </svg>
                </div>
                <div class="text-left">
                  <div class="font-semibold text-gray-900">Quality Assurance</div>
                  <div class="text-sm text-gray-600">Industry standards</div>
                </div>
              </div>
              <div class="flex items-center justify-center space-x-3">
                <div class="w-12 h-12 bg-indigo-500 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <div class="text-left">
                  <div class="font-semibold text-gray-900">Global Network</div>
                  <div class="text-sm text-gray-600">Worldwide reach</div>
                </div>
              </div>
              <div class="flex items-center justify-center space-x-3">
                <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                  </svg>
                </div>
                <div class="text-left">
                  <div class="font-semibold text-gray-900">Fast Service</div>
                  <div class="text-sm text-gray-600">Efficient solutions</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Redesigned Modern CTA Section -->
    <section ref="ctaRef" class="py-32 bg-gradient-to-br from-gray-900 via-blue-900 to-indigo-900 text-white relative overflow-hidden">
      <!-- Modern Background Elements -->
      <div class="absolute inset-0 opacity-20">
        <!-- Geometric shapes -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-600/10 via-transparent to-indigo-600/10"></div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-gradient-to-br from-blue-400/10 to-indigo-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-20 w-80 h-80 bg-gradient-to-br from-indigo-400/10 to-purple-400/10 rounded-full blur-3xl"></div>
        
        <!-- Floating particles -->
        <div class="absolute top-1/4 left-1/4 w-3 h-3 bg-blue-400/50 rounded-full animate-pulse"></div>
        <div class="absolute top-3/4 right-1/3 w-4 h-4 bg-indigo-400/50 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-3/4 w-2 h-2 bg-purple-400/50 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
      </div>
      
      <!-- Decorative grid pattern -->
      <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 1px 1px, rgba(255,255,255,0.3) 1px, transparent 0); background-size: 50px 50px;"></div>
      
      <div class="container mx-auto px-6 text-center relative z-10">
        <div ref="ctaContent" class="max-w-5xl mx-auto">
          <!-- Header Section -->
          <div class="mb-12">
            <div class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 shadow-lg mb-8">
              <svg class="w-5 h-5 text-blue-300 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
              <span class="text-sm font-semibold text-blue-200 tracking-wide">Get Started Today</span>
            </div>
            
            <h2 class="text-4xl lg:text-6xl font-bold mb-8 leading-tight">
              <span class="bg-gradient-to-r from-white via-blue-100 to-indigo-100 bg-clip-text text-transparent">
                Ready to Optimize
              </span>
              <br>
              <span class="text-white">Your Logistics?</span>
          </h2>
            
            <p class="text-xl lg:text-2xl font-light mb-12 max-w-4xl mx-auto text-blue-100 leading-relaxed">
              Join thousands of satisfied customers who trust us with their global logistics needs. 
              Experience the difference of working with industry leaders.
            </p>
          </div>

          <!-- CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-6 justify-center mb-16">
            <router-link 
              ref="primaryCtaBtn"
              to="/contact" 
              class="group relative bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-400 hover:to-indigo-500 text-white px-12 py-5 rounded-2xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl"
            >
              <span class="relative z-10 flex items-center justify-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Get Free Quote
              </span>
              <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-white/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </router-link>
            
            <router-link 
              ref="secondaryCtaBtn"
              to="/services" 
              class="group bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white hover:bg-white hover:text-gray-900 px-12 py-5 rounded-2xl font-semibold text-lg transition-all duration-300 transform hover:scale-105"
            >
              <span class="flex items-center justify-center">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                </svg>
                Our Services
                <svg class="ml-3 w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
              </span>
            </router-link>
          </div>

          <!-- Trust Indicators -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="flex items-center justify-center space-x-3 text-blue-200">
              <svg class="w-6 h-6 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              <span class="font-medium">Free Consultation</span>
            </div>
            <div class="flex items-center justify-center space-x-3 text-blue-200">
              <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
              </svg>
              <span class="font-medium">ISO Certified</span>
            </div>
            <div class="flex items-center justify-center space-x-3 text-blue-200">
              <svg class="w-6 h-6 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 2L3 7v11a1 1 0 001 1h12a1 1 0 001-1V7l-7-5zM6 10a1 1 0 112 0v3a1 1 0 11-2 0v-3zm6 0a1 1 0 10-2 0v3a1 1 0 102 0v-3z" clip-rule="evenodd"/>
              </svg>
              <span class="font-medium">24/7 Support</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
import { ref, onMounted, nextTick, h } from 'vue';
import { gsap, ScrollTrigger } from '@/utils/gsap';

// Use public image path with fallbacks
const whoweImage = ref('/images/whowe.jpg');

// Partner logos
const partner1Image = '/images/partner1.png';
const partner2Image = '/images/partner2.jpg';

const handleImageError = () => {
  console.log('Primary image failed, trying fallback...');
  // Try alternative images if whowe.jpg fails
  const fallbacks = ['/images/logistic.jpg', '/images/hero.jpg', '/images/service.jpg'];
  const currentIndex = fallbacks.indexOf(whoweImage.value);
  if (currentIndex < fallbacks.length - 1) {
    whoweImage.value = fallbacks[currentIndex + 1];
  } else {
    console.log('All image fallbacks failed');
  }
};

const handleImageLoad = () => {
  console.log('Image loaded successfully:', whoweImage.value);
};

// Template refs
const aboutRef = ref(null);
const heroRef = ref(null);
const heroContent = ref(null);
const heroTitle = ref(null);
const heroSubtitle = ref(null);
const heroStats = ref(null);
const storyRef = ref(null);
const storyContent = ref(null);
const storyVisual = ref(null);
const valuesRef = ref(null);
const valuesHeader = ref(null);
const missionCard = ref(null);
const visionCard = ref(null);
const valuesCard = ref(null);
const whyUsRef = ref(null);
const whyUsHeader = ref(null);
const ctaRef = ref(null);
const ctaContent = ref(null);
const primaryCtaBtn = ref(null);
const secondaryCtaBtn = ref(null);
const featureRefs = ref([]);

// Professional SVG Icon Components
const GlobalNetworkIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
  })
]);

const TimingIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
  })
]);

const CostEffectiveIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
  })
]);

const SecurityIcon = () => h('svg', {
  fill: 'none',
  stroke: 'currentColor',
  viewBox: '0 0 24 24',
  xmlns: 'http://www.w3.org/2000/svg'
}, [
  h('path', {
    'stroke-linecap': 'round',
    'stroke-linejoin': 'round',
    'stroke-width': '2',
    d: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
  })
]);

// Why Choose Us features with professional icons
const features = ref([
  {
    id: 1,
    icon: GlobalNetworkIcon,
    title: "Global Network",
    description: "Extensive worldwide coverage connecting major trade routes and destinations"
  },
  {
    id: 2,
    icon: TimingIcon,
    title: "Timely Delivery",
    description: "Reliable schedules and on-time performance for all your shipments"
  },
  {
    id: 3,
    icon: CostEffectiveIcon,
    title: "Cost-Effective",
    description: "Competitive pricing with transparent cost structures and no hidden fees"
  },
  {
    id: 4,
    icon: SecurityIcon,
    title: "Secure & Safe",
    description: "Advanced tracking, insurance options, and risk management protocols"
  }
]);

const initModernAnimations = () => {
  // Hero Section Animations
  gsap.set(heroContent.value, { opacity: 0, y: 60 });
  
  const heroTl = gsap.timeline();
  heroTl
    .to(heroContent.value, {
      opacity: 1,
      y: 0,
      duration: 1.2,
      ease: "power3.out"
    });

  // Story Section ScrollTrigger with Modern Animations
  gsap.set([storyContent.value, storyVisual.value], { opacity: 0, y: 80 });
  gsap.timeline({
    scrollTrigger: {
      trigger: storyRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(storyContent.value, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power3.out"
  })
  .to(storyVisual.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "back.out(1.3)"
  }, "-=0.6");

  // Values Section with Staggered Animation
  gsap.set([valuesHeader.value, missionCard.value, visionCard.value, valuesCard.value], { opacity: 0, y: 60 });
  gsap.timeline({
    scrollTrigger: {
      trigger: valuesRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(valuesHeader.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out"
  })
  .to([missionCard.value, visionCard.value, valuesCard.value], {
    opacity: 1,
    y: 0,
    duration: 0.8,
    stagger: 0.2,
    ease: "back.out(1.3)"
  }, "-=0.4");

  // Why Choose Us with Enhanced Stagger
  gsap.set([whyUsHeader.value, ...featureRefs.value.filter(Boolean)], { opacity: 0, y: 60 });
  gsap.timeline({
    scrollTrigger: {
      trigger: whyUsRef.value,
      start: "top 70%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(whyUsHeader.value, {
    opacity: 1,
    y: 0,
    duration: 0.8,
    ease: "power2.out"
  })
  .to(featureRefs.value.filter(Boolean), {
    opacity: 1,
    y: 0,
    duration: 0.7,
    stagger: 0.15,
    ease: "back.out(1.5)"
  }, "-=0.4");

  // CTA Section with Smooth Entrance
  gsap.set(ctaContent.value, { opacity: 0, y: 40 });
  gsap.timeline({
    scrollTrigger: {
      trigger: ctaRef.value,
      start: "top 80%",
      end: "bottom 20%",
      toggleActions: "play none none reverse"
    }
  })
  .to(ctaContent.value, {
    opacity: 1,
    y: 0,
    duration: 1,
    ease: "power2.out"
  });
};

onMounted(() => {
  nextTick(() => {
    setTimeout(() => {
      initModernAnimations();
    }, 300);
  });
});
</script>

<style scoped>
.about-page {
  min-height: 100vh;
}

/* Modern smooth transitions */
.transition-all {
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Enhanced modern hover effects */
.group:hover {
  transform: translateY(-12px);
}

/* Modern glassmorphism effects */
.backdrop-blur-sm {
  backdrop-filter: blur(8px);
}

/* Enhanced shadows for modern design */
.shadow-xl {
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.hover\:shadow-2xl:hover {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Modern gradient text effects */
.bg-clip-text {
  -webkit-background-clip: text;
  background-clip: text;
}

/* Enhanced floating animations */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

/* Modern pulse animation with color variations */
.animate-pulse {
  animation: modernPulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
}

@keyframes modernPulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

/* Enhanced card hover transformations */
.group:hover .bg-gradient-to-br {
  transform: scale(1.05) rotate(1deg);
}

/* Modern button hover effects */
.group:hover .rounded-2xl {
  transform: translateY(-2px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

/* Smooth scale animations */
.transform {
  transition: transform 0.3s ease-out;
}

.hover\:scale-105:hover {
  transform: scale(1.05);
}

.hover\:scale-110:hover {
  transform: scale(1.1);
}

/* Modern border radius */
.rounded-3xl {
  border-radius: 1.5rem;
}

/* Enhanced text shadows */
.text-shadow {
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Modern gradient backgrounds */
.bg-gradient-modern {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

/* Responsive design enhancements */
@media (max-width: 768px) {
  .group:hover {
    transform: translateY(-6px);
  }
  
  .text-5xl {
    font-size: 2.5rem;
  }
  
  .text-6xl {
    font-size: 3rem;
  }
}

/* Modern scrollbar styling */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f5f9;
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(135deg, #3b82f6, #6366f1);
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(135deg, #2563eb, #4f46e5);
}

/* Enhanced focus states for accessibility */
.focus\:ring-4:focus {
  box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
}

/* Modern loading states */
.loading-shimmer {
  background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
  background-size: 200% 100%;
  animation: shimmer 2s infinite;
}

@keyframes shimmer {
  0% { background-position: -200% 0; }
  100% { background-position: 200% 0; }
}
</style> 