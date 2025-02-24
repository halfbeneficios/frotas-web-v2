<?php

namespace App\Notifications\General;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SystemAlert extends Notification
{

    use Queueable;

    private User $user;

    private string $title;

    private string $message;

    private string $from;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, String $title, String $message, String $from)
    {

        $this->user = $user;

        $this->title = $title;

        $this->message = $message;

        $this->from = $from;

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
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject($this->title)
            ->greeting("Olá, " . $this->user->name)
            ->line($this->message)
            ->line('De: ' . $this->from)
            ->markdown('vendor.notifications.email');
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
