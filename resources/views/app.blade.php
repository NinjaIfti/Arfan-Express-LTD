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
    
    <!-- Preload critical resources -->
    <link rel="preload" href="{{ asset('images/hero.jpg') }}" as="image" importance="high">
    <link rel="preload" href="{{ asset('images/logo.jpg') }}" as="image" importance="high">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600&display=swap" rel="stylesheet">
    
    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Additional Head Scripts -->
    <script>
        // Set theme preference before page load to prevent flash
        (function() {
            const theme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>
</head>
<body class="font-inter antialiased">
    <!-- Vue.js App Mount Point -->
    <div id="app">
        <!-- Loading Spinner (shown while Vue.js loads) -->
        <div class="min-h-screen flex items-center justify-center bg-background-50">
            <div class="text-center">
                <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-primary mx-auto mb-4"></div>
                <p class="text-neutral-600 text-lg">Loading Arfan Express...</p>
            </div>
        </div>
    </div>

    <!-- Fallback for users without JavaScript -->
    <noscript>
        <div class="min-h-screen flex items-center justify-center bg-background-50">
            <div class="text-center max-w-md mx-auto p-6">
                <h1 class="text-3xl font-bold text-neutral-600 mb-4">JavaScript Required</h1>
                <p class="text-neutral-500 mb-6">
                    This website requires JavaScript to function properly. Please enable JavaScript in your browser settings and refresh the page.
                </p>
                <div class="bg-white rounded-lg p-6 shadow-lg">
                    <h2 class="text-xl font-semibold text-primary mb-3">Contact Arfan Express</h2>
                    <p class="text-neutral-600 mb-2">📧 Email: motiur@arfanexpressbd.com</p>
                    <p class="text-neutral-600 mb-2">📞 Phone: Contact us via email</p>
                    <p class="text-neutral-600">🌐 Visit our website for more details</p>
                </div>
            </div>
        </div>
    </noscript>

    <!-- Google Analytics -->
    @if(config('app.env') === 'production' && !empty(env('GOOGLE_ANALYTICS_ID')))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTICS_ID') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('GOOGLE_ANALYTICS_ID') }}');
    </script>
    @endif

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Arfan Express LTD",
        "description": "Global logistics and freight forwarding services",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.jpg') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "motiur@arfanexpressbd.com",
            "contactType": "customer service",
            "availableLanguage": ["English"]
        },
        "service": [
            {
                "@type": "Service",
                "name": "Ocean Freight",
                "description": "Sea shipping solutions for large cargo volumes"
            },
            {
                "@type": "Service", 
                "name": "Air Freight",
                "description": "Fast air cargo services for time-sensitive shipments"
            },
            {
                "@type": "Service",
                "name": "Road Transport", 
                "description": "Ground transportation and last-mile delivery"
            },
            {
                "@type": "Service",
                "name": "Customs Brokerage", 
                "description": "Professional customs clearance and documentation services"
            }
        ]
    }
    </script>
</body>
</html> 