<?php

namespace App\Notifications\General;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InactiveUser extends Notification
{

    use Queueable;

    private User $user;

    private String $name;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, String $name)
    {
        $this->user = $user;

        $this->name = $name;

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
            ->subject('Conta Desativada')
            ->greeting("Olá, ".$this->name)
            ->line('Sua conta foi desativada em nosso sistema.')
            ->line('Para maiores informações, recomendamos que entre em contato conosco.')
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
