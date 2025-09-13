<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable\Address;

class ExampleMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public $name, ){}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'This is an Example Mail',
            from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.example',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
