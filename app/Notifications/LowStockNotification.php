<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Product;

class LowStockNotification extends Notification
{
    use Queueable;

    public $product;

    /**
     * Create a new notification instance.
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
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
            ->subject('Low Stock Alert: ' . $this->product->name)
            ->line('The stock for ' . $this->product->name . ' is running low.')
            ->line('Current Quantity: ' . $this->product->quantity)
            ->line('Minimum Required: ' . $this->product->min_stock)
            ->action('Manage Inventory', route('client.inventory.index'))
            ->line('Please restock soon to avoid running out.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'low_stock',
            'message' => 'Low stock alert: ' . $this->product->name . ' (' . $this->product->quantity . ' left)',
            'product_id' => $this->product->id,
        ];
    }
}
