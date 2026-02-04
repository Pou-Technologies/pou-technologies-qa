<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientNewsletter extends Mailable
{
    use Queueable, SerializesModels;

    public $subjectLine;
    public $content;
    public $sender;

    /**
     * Create a new message instance.
     */
    public function __construct($subject, $content, $sender)
    {
        $this->subjectLine = $subject;
        $this->content = $content;
        $this->sender = $sender;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subjectLine,
            from: new \Illuminate\Mail\Mailables\Address($this->sender->email, $this->sender->name)
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.client_newsletter',
            with: [
                'content' => $this->content,
                'senderName' => $this->sender->name,
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
