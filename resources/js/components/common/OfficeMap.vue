<template>
  <div class="w-full">
    <div class="flex justify-center mb-4 gap-2">
      <button
        v-for="(loc, idx) in locations"
        :key="loc.id"
        :class="[
          'px-4 py-2 rounded-lg font-semibold transition',
          idx === selectedIndex ? 'bg-blue-700 text-white shadow' : 'bg-white text-blue-700 border border-blue-200 hover:bg-blue-50'
        ]"
        @click="selectLocation(idx)"
      >
        {{ loc.city }}
      </button>
    </div>
    <div ref="mapContainer" class="w-full h-80 rounded-2xl shadow border border-gray-200"></div>
  </div>
</template>

<script setup>
import { ref, onMounted, watch, nextTick } from 'vue';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

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

const mapContainer = ref(null);
const map = ref(null);
const marker = ref(null);
const selectedIndex = ref(props.initialIndex);

const selectLocation = idx => {
  selectedIndex.value = idx;
  emit('location-change', props.locations[idx]);
  updateMap();
};

const updateMap = () => {
  if (!map.value) return;
  const loc = props.locations[selectedIndex.value];
  map.value.setView([loc.lat, loc.lng], 14);
  if (marker.value) marker.value.remove();
  marker.value = L.marker([loc.lat, loc.lng]).addTo(map.value)
    .bindPopup(`<b>${loc.city}</b><br>${loc.address}`)
    .openPopup();
};

onMounted(async () => {
  await nextTick();
  const loc = props.locations[selectedIndex.value];
  map.value = L.map(mapContainer.value).setView([loc.lat, loc.lng], 14);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map.value);
  updateMap();
});

watch(selectedIndex, updateMap);
</script>

<style scoped>
.leaflet-container {
  width: 100% !important;
  height: 100% !important;
  border-radius: 1rem;
}
</style> 