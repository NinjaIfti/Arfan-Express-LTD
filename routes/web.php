<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

// Catch-all route for Vue.js SPA
// This should handle all frontend routes and let Vue Router handle routing
Route::get('/{path?}', function () {
    return view('app');
})->where('path', '.*');

// API Routes (if needed for contact forms, etc.)
Route::prefix('api')->group(function () {
    // Example API routes that could be used by the Vue.js frontend
    
    // Contact form submission
    Route::post('/contact', function () {
        // Handle contact form submission
        return response()->json(['message' => 'Contact form submitted successfully']);
    });
    
    // Quote request
    Route::post('/quote', function () {
        // Handle quote request
        return response()->json(['message' => 'Quote request submitted successfully']);
    });
    
    // Services data (if you want to fetch from API instead of hardcoding)
    Route::get('/services', function () {
        return response()->json([
            'services' => [
                [
                    'id' => 1,
                    'title' => 'Ocean Freight',
                    'description' => 'Cost-effective sea shipping solutions for large cargo volumes.',
                    'icon' => '🚢',
                    'features' => ['FCL & LCL Services', 'Global Port Coverage', 'Customs Clearance', 'Container Tracking'],
                    'slug' => 'ocean-freight'
                ],
                [
                    'id' => 2,
                    'title' => 'Air Freight',
                    'description' => 'Fast and reliable air cargo services for time-sensitive shipments.',
                    'icon' => '✈️',
                    'features' => ['Express Delivery', 'Priority Handling', 'Real-time Tracking', 'Dangerous Goods'],
                    'slug' => 'air-freight'
                ],
                // Add more services as needed
            ]
        ]);
    });
    
    // Individual service details
    Route::get('/services/{slug}', function ($slug) {
        // Return specific service details based on slug
        return response()->json(['service' => ['slug' => $slug]]);
    });
});
