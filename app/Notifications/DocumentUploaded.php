<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DocumentUploaded extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $document;

    /**
     * Create a new notification instance.
     */
    public function __construct($document)
    {
        $this->document = $document;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New Document Uploaded')
            ->line('A new document has been uploaded for you: ' . $this->document->title)
            ->action('View Documents', route('client.documents'))
            ->line('Thank you for choosing Pou Technologies!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'document_id' => $this->document->id,
            'title' => $this->document->title,
            'message' => 'New document available: ' . $this->document->title,
            'type' => 'document_upload'
        ];
    }
}
