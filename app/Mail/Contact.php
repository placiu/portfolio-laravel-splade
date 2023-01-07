<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public array $formData;

    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    public function envelope()
    {
        return new Envelope(
            from: env('MAIL_FROM_ADDRESS'),
            replyTo: [
                new Address($this->formData['email'], $this->formData['first_name'] . ' ' . $this->formData['last_name']),
            ],
            subject: $this->formData['subject'],
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.contact',
        );
    }

    public function attachments()
    {
        return [];
    }
}
