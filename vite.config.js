import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                compilerOptions: {
                    hoistStatic: true,
                    cacheHandlers: true,
                }
            }
        }),
        tailwindcss(),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
    build: {
        outDir: 'public/build',
        rollupOptions: {
            output: {
                manualChunks: {
                    'vendor': ['vue', 'vue-router', 'pinia'],
                    'animations': ['gsap'],
                    'utils': ['aos', 'axios'],
                    'forms': ['vee-validate', 'yup']
                }
            }
        },
        minify: 'esbuild',
        assetsInlineLimit: 4096, // Inline assets smaller than 4KB
        cssCodeSplit: true,
        // Enable more aggressive optimization
        target: 'es2015',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true,
            },
        },
    },
    server: {
        hmr: {
            overlay: false
        }
    },
    // Performance optimizations
    optimizeDeps: {
        include: ['vue', 'vue-router', 'pinia'],
        exclude: ['@vueuse/core'] // Exclude large optional dependencies
    },
    // Image optimization
    assetsInclude: ['**/*.jpg', '**/*.jpeg', '**/*.png', '**/*.webp', '**/*.avif']
});