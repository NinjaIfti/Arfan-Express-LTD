<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Arfan Express LTD') }} - Global Logistics & Freight Forwarding</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Arfan Express LTD - Your trusted partner in global logistics and freight forwarding. Ocean freight, air freight, road transport, and warehousing services worldwide.">
    <meta name="keywords" content="freight forwarding, logistics, ocean freight, air freight, road transport, warehousing, customs clearance, global shipping">
    <meta name="author" content="Arfan Express LTD">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Arfan Express LTD - Global Logistics Solutions">
    <meta property="og:description" content="Professional freight forwarding and logistics services worldwide. Ocean, air, and road transport solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/logo.jpg') }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Arfan Express LTD - Global Logistics Solutions">
    <meta name="twitter:description" content="Professional freight forwarding and logistics services worldwide.">
    <meta name="twitter:image" content="{{ asset('images/logo.jpg') }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    
    <!-- Critical resource preloads -->
    <link rel="preload" href="{{ asset('images/hero.jpg') }}" as="image" importance="high">
    
    <!-- DNS prefetch for external resources -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    <!-- Preconnect to critical external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Optimized font loading -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    
    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Performance optimizations -->
    <script>
        // Prevent FOUC and set theme before page load
        (function() {
            const theme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', theme);
            
            // Preload critical routes
            if ('IntersectionObserver' in window) {
                // Setup intersection observer for lazy loading
                window.lazyLoadObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                                window.lazyLoadObserver.unobserve(img);
                            }
                        }
                    });
                });
            }
        })();
    </script>
</head>
<body class="font-inter antialiased">
    <!-- Vue.js App Mount Point -->
    <div id="app">
        <!-- Optimized Loading Spinner -->
        <div class="min-h-screen flex items-center justify-center bg-gray-50">
            <div class="text-center">
                <div class="w-12 h-12 border-3 border-blue-600 border-t-transparent rounded-full animate-spin mx-auto mb-4"></div>
                <p class="text-gray-600 text-sm">Loading...</p>
            </div>
        </div>
    </div>

    <!-- Fallback for users without JavaScript -->
    <noscript>
        <div class="min-h-screen flex items-center justify-center bg-gray-50">
            <div class="text-center max-w-md mx-auto p-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">JavaScript Required</h1>
                <p class="text-gray-600 mb-6">
                    This website requires JavaScript to function properly. Please enable JavaScript in your browser settings and refresh the page.
                </p>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <h2 class="text-lg font-semibold text-blue-600 mb-3">Contact Arfan Express</h2>
                    <p class="text-gray-600 mb-2">📧 Email: motiur@arfanexpressbd.com</p>
                    <p class="text-gray-600 mb-2">📞 Phone: Contact us via email</p>
                    <p class="text-gray-600">🌐 Visit our website for more details</p>
                </div>
            </div>
        </div>
    </noscript>

    <!-- Analytics - Only in production -->
    @if(config('app.env') === 'production' && !empty(env('GOOGLE_ANALYTICS_ID')))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('GOOGLE_ANALYTICS_ID') }}', {
            send_page_view: false // We'll send page views manually in Vue
        });
    </script>
    @endif
</body>
</html> 