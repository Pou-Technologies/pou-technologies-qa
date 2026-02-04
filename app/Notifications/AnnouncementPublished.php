<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AnnouncementPublished extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $announcement;

    /**
     * Create a new notification instance.
     */
    public function __construct($announcement)
    {
        $this->announcement = $announcement;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database']; // Announcements might not need email spam, just dashboard notification
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('New Announcement: ' . $this->announcement->title)
            ->action('View Dashboard', route('dashboard'))
            ->line('Check the client portal for more details.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'announcement_id' => $this->announcement->id,
            'title' => $this->announcement->title,
            'message' => 'New announcement: ' . $this->announcement->title,
            'type' => 'announcement'
        ];
    }
}
