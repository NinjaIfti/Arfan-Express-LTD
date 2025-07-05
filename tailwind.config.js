import { defineConfig } from '@tailwindcss/vite';

export default defineConfig({
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        // Brand Blue
        primary: {
          DEFAULT: '#2e74b9', // Main Brand Blue
          50: '#eaf3fa',
          100: '#d4e7f5',
          200: '#a9ceeb',
          300: '#7eb6e1',
          400: '#539dd7',
          500: '#2e74b9',
          600: '#245c94',
          700: '#1a446f',
          800: '#102c4a',
          900: '#081526',
        },
        // Sea Green Palette
        secondary: {
          50: '#ecfdf5',
          100: '#d1fae5',
          200: '#a7f3d0',
          300: '#6ee7b7',
          400: '#34d399',
          500: '#059669', // Success Green
          600: '#047857',
          700: '#065f46',
          800: '#064e3b',
          900: '#022c22',
        },
        // Coral/Warning Red
        accent: {
          50: '#fef2f2',
          100: '#fee2e2',
          200: '#fecaca',
          300: '#fca5a5',
          400: '#f87171',
          500: '#DC2626', // Alert Red
          600: '#dc2626',
          700: '#b91c1c',
          800: '#991b1b',
          900: '#7f1d1d',
        },
        // Ocean Neutrals (Sea-inspired grays and blues)
        neutral: {
          50: '#f8fafc',
          100: '#f1f5f9',
          200: '#e2e8f0',
          300: '#cbd5e1',
          400: '#94a3b8',
          500: '#64748b',
          600: '#475569', // Deep Ocean Gray
          700: '#334155',
          800: '#1e293b',
          900: '#0f172a',
        },
        // Ocean Backgrounds
        background: {
          50: '#f0f9ff', // Light Ocean Mist
          100: '#e0f2fe', // Ocean Foam
          200: '#f9fafb', // Original light
          900: '#0c1821', // Deep Ocean
        },
        // Maritime themed colors
        ocean: {
          light: '#87ceeb', // Sky Blue
          DEFAULT: '#1E3A8A', // Ocean Blue
          dark: '#003366', // Deep Sea
          foam: '#e0f2fe', // Ocean Foam
          mist: '#f0f9ff', // Ocean Mist
        },
        maritime: {
          coral: '#ff7f7f',
          seaweed: '#2d5016',
          sand: '#f4a460',
          pearl: '#f8f8ff',
          anchor: '#2f4f4f',
        }
      },
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
        'poppins': ['Poppins', 'sans-serif'],
      },
      spacing: {
        '1': '0.25rem',
        '2': '0.5rem',
        '3': '0.75rem',
        '4': '1rem',
        '5': '1.25rem',
        '6': '1.5rem',
        '8': '2rem',
        '10': '2.5rem',
        '12': '3rem',
        '16': '4rem',
        '20': '5rem',
        '24': '6rem',
      },
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'slide-up': 'slide-up 0.5s ease-out',
        'wave': 'wave 2s ease-in-out infinite',
        'drift': 'drift 8s ease-in-out infinite',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-20px)' },
        },
        'slide-up': {
          '0%': { transform: 'translateY(100%)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        wave: {
          '0%, 100%': { transform: 'rotate(0deg)' },
          '50%': { transform: 'rotate(3deg)' },
        },
        drift: {
          '0%, 100%': { transform: 'translateX(0px) translateY(0px)' },
          '33%': { transform: 'translateX(30px) translateY(-10px)' },
          '66%': { transform: 'translateX(-20px) translateY(10px)' },
        }
      },
      backgroundImage: {
        'ocean-gradient': 'linear-gradient(135deg, #2e74b9 0%, #7eb6e1 50%, #059669 100%)',
        'wave-pattern': 'url("data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cg fill=\"none\" fill-rule=\"evenodd\"%3E%3Cg fill=\"%23f0f9ff\" fill-opacity=\"0.1\"%3E%3Cpath d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E")',
      }
    },
  },
  plugins: [],
}); 