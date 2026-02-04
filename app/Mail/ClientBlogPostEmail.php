<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientBlogPostEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $post;
    public $sender;
    public $customSubject;

    public function __construct($post, $sender, $customSubject)
    {
        $this->post = $post;
        $this->sender = $sender;
        $this->customSubject = $customSubject;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->customSubject,
            from: new \Illuminate\Mail\Mailables\Address($this->sender->email, $this->sender->name)
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.client_blog_post',
            with: [
                'post' => $this->post,
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
