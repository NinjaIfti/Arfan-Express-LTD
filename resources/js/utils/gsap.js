// Centralized GSAP configuration
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';
import { CSSPlugin } from 'gsap/CSSPlugin';

// Force registration of all plugins including CSSPlugin
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, CSSPlugin);

// Initialize GSAP with a test animation to ensure all properties work
gsap.set(document.createElement('div'), { 
  opacity: 1, 
  x: 0, 
  y: 0, 
  scale: 1,
  rotation: 0 
});

// Ensure GSAP core is fully initialized
gsap.ticker.lagSmoothing(0);

export { gsap, ScrollTrigger };


