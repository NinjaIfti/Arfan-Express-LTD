<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// API Routes for contact form
Route::post('/api/contact', [ContactController::class, 'submitContactForm'])
    ->name('contact.submit');

// Catch-all route for Vue.js SPA routing
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
