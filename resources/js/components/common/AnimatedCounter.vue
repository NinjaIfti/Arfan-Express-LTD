<template>
  <span>{{ displayValue }}{{ suffix }}</span>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue';

const props = defineProps({
  target: {
    type: Number,
    required: true
  },
  duration: {
    type: Number,
    default: 2000
  },
  suffix: {
    type: String,
    default: ''
  }
});

const displayValue = ref(0);

const animateCounter = () => {
  const start = 0;
  const end = props.target;
  const increment = end / (props.duration / 16); // 60fps
  
  const step = () => {
    if (displayValue.value < end) {
      displayValue.value = Math.min(displayValue.value + increment, end);
      if (displayValue.value < end) {
        requestAnimationFrame(step);
      } else {
        displayValue.value = end;
      }
    }
  };
  
  requestAnimationFrame(step);
};

onMounted(() => {
  // Use Intersection Observer to trigger animation when element is visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter();
        observer.disconnect();
      }
    });
  });
  
  // We need to observe the parent element since this is just a span
  const parent = document.querySelector('[data-aos="fade-up"]');
  if (parent) {
    observer.observe(parent);
  } else {
    // Fallback if no parent found
    setTimeout(animateCounter, 500);
  }
});

watch(() => props.target, () => {
  displayValue.value = 0;
  animateCounter();
});
</script> 