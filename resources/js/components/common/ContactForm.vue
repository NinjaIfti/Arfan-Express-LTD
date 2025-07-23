<template>
  <form @submit="onSubmit" class="space-y-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Name Field -->
      <div>
        <label for="name" class="block text-sm font-medium text-neutral-600 mb-2">
          Full Name *
        </label>
        <input
          v-model="name"
          type="text"
          id="name"
          name="name"
          class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
          :class="{ 'border-red-500': nameError }"
          placeholder="Enter your full name"
        />
        <p v-if="nameError" class="text-red-500 text-sm mt-1">{{ nameError }}</p>
      </div>

      <!-- Email Field -->
      <div>
        <label for="email" class="block text-sm font-medium text-neutral-600 mb-2">
          Email Address *
        </label>
        <input
          v-model="email"
          type="email"
          id="email"
          name="email"
          class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
          :class="{ 'border-red-500': emailError }"
          placeholder="Enter your email"
        />
        <p v-if="emailError" class="text-red-500 text-sm mt-1">{{ emailError }}</p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Phone Field -->
      <div>
        <label for="phone" class="block text-sm font-medium text-neutral-600 mb-2">
          Phone Number
        </label>
        <input
          v-model="phone"
          type="tel"
          id="phone"
          name="phone"
          class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
          :class="{ 'border-red-500': phoneError }"
          placeholder="Enter your phone number"
        />
        <p v-if="phoneError" class="text-red-500 text-sm mt-1">{{ phoneError }}</p>
      </div>

      <!-- Company Field -->
      <div>
        <label for="company" class="block text-sm font-medium text-neutral-600 mb-2">
          Company Name
        </label>
        <input
          v-model="company"
          type="text"
          id="company"
          name="company"
          class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
          placeholder="Enter your company name"
        />
      </div>
    </div>

    <!-- Service Interest -->
    <div>
      <label for="service" class="block text-sm font-medium text-neutral-600 mb-2">
        Service Interest
      </label>
      <select
        v-model="service"
        id="service"
        name="service"
        class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors"
      >
        <option value="">Select a service</option>
        <option value="ocean-freight">Ocean Freight</option>
        <option value="air-freight">Air Freight</option>
        <option value="road-transport">Road Transport</option>
        <option value="customs-clearance">Customs Clearance</option>
        <option value="warehousing">Warehousing</option>
        <option value="other">Other</option>
      </select>
    </div>

    <!-- Message Field -->
    <div>
      <label for="message" class="block text-sm font-medium text-neutral-600 mb-2">
        Message *
      </label>
      <textarea
        v-model="message"
        id="message"
        name="message"
        rows="4"
        class="w-full px-4 py-3 border border-neutral-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent transition-colors resize-none"
        :class="{ 'border-red-500': messageError }"
        placeholder="Tell us about your shipping requirements..."
      ></textarea>
      <p v-if="messageError" class="text-red-500 text-sm mt-1">{{ messageError }}</p>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
      <button
        type="submit"
        :disabled="isSubmitting"
        class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-blue-800 transition-colors duration-300 disabled:opacity-50 disabled:cursor-not-allowed font-medium"
      >
        <span v-if="!isSubmitting">Send Message</span>
        <span v-else class="flex items-center">
          <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          Sending...
        </span>
      </button>
    </div>
  </form>
</template>

<script setup>
import { useForm } from 'vee-validate';
import * as yup from 'yup';

// Validation schema
const schema = yup.object({
  name: yup.string().required('Name is required'),
  email: yup.string().email('Invalid email format').required('Email is required'),
  phone: yup.string(),
  company: yup.string(),
  service: yup.string(),
  message: yup.string().required('Message is required').min(10, 'Message must be at least 10 characters'),
});

// Form handling
const { defineField, handleSubmit, errors, isSubmitting, resetForm } = useForm({
  validationSchema: schema,
});

const [name, nameError] = defineField('name');
const [email, emailError] = defineField('email');
const [phone, phoneError] = defineField('phone');
const [company] = defineField('company');
const [service] = defineField('service');
const [message, messageError] = defineField('message');

const onSubmit = handleSubmit(async (values) => {
  try {
    // Get CSRF token from meta tag
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
    // Submit form data to Laravel API
    const response = await fetch('/api/contact', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-CSRF-TOKEN': csrfToken || '',
      },
      body: JSON.stringify(values)
    });

    const result = await response.json();

    if (response.ok && result.success) {
      // Show success message
      alert('✅ ' + result.message);
      
      // Reset form on success
      resetForm();
    } else {
      // Handle validation errors
      if (result.errors) {
        console.error('Validation errors:', result.errors);
        alert('❌ Please fix the following errors:\n' + Object.values(result.errors).flat().join('\n'));
      } else {
        alert('❌ ' + (result.message || 'There was an error sending your message. Please try again.'));
      }
    }
  } catch (error) {
    console.error('Error submitting form:', error);
    alert('❌ Network error. Please check your connection and try again.');
  }
});
</script> 