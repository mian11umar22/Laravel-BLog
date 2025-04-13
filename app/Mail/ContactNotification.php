<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $userMessage; 
    public $email;
    

    public function __construct($name, $email, $userMessage)
    {
        $this->name = $name;
        $this->userMessage = $userMessage;
        $this->email = $email;
     
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Notification',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'contact-message',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
