<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormSubmission;
use Exception;

class ContactController extends Controller
{
    /**
     * Handle contact form submission
     */
    public function submitContactForm(Request $request): JsonResponse
    {
        try {
            // Validate the incoming request
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
                'company' => 'nullable|string|max:255',
                'service' => 'nullable|string|max:100',
                'message' => 'required|string|min:10|max:1000',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            $contactData = $validator->validated();
            
            // Get email recipient from config
            $toEmail = env('CONTACT_MAIL_TO', 'motiur@arfanexpressbd.com');

            // Send email to company
            Mail::to($toEmail)
                ->send(new ContactFormSubmission($contactData));

            // Send confirmation email to customer
            $this->sendCustomerConfirmation($contactData);

            return response()->json([
                'success' => true,
                'message' => 'Thank you for your message! We will get back to you within 24 hours.'
            ]);

        } catch (Exception $e) {
            // Log the error for debugging
            \Log::error('Contact form submission failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Sorry, there was an error sending your message. Please try again or contact us directly.'
            ], 500);
        }
    }

    /**
     * Send confirmation email to customer
     */
    private function sendCustomerConfirmation(array $contactData): void
    {
        try {
            $customerData = [
                'name' => $contactData['name'],
                'service' => $contactData['service'] ?? null,
                'message' => $contactData['message'],
            ];

            Mail::to($contactData['email'])
                ->send(new \App\Mail\CustomerConfirmation($customerData));
        } catch (Exception $e) {
            // Log error but don't fail the main process
            \Log::warning('Customer confirmation email failed: ' . $e->getMessage());
        }
    }
}
