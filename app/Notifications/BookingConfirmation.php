<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingConfirmation extends Notification
{
    use Queueable;

    public $space;
    public $totalPrice;
    
    public function __construct($space, $totalPrice)
    {
        $this->space = $space;
        $this->totalPrice = $totalPrice;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Booking Confirmation')
            ->line('Thank you for your payment. Your space has been Reserved!')
            ->line('Booked Space Information:')
            ->line('Space Number: ' . $this->space->space_number)
            ->line('Amount Paid: KES ' . $this->totalPrice)
            ->line('Thank you for entrusting our services!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
