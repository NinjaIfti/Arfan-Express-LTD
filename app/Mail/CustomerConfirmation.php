<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $customerData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $customerData)
    {
        $this->customerData = $customerData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank you for contacting Arfan Express LTD',
            from: ['address' => env('MAIL_FROM_ADDRESS'), 'name' => 'Arfan Express Limited']
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.customer-confirmation',
            with: [
                'name' => $this->customerData['name'],
                'service' => $this->customerData['service'] ?? null,
                'message' => $this->customerData['message'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
