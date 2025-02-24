<?php

namespace App\Notifications\Company;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContractChanges extends Notification
{

    use Queueable;

    private User $user;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
            ->subject('Alterações no Contrato')
            ->greeting("Olá,")
            ->line($this->user->name . ' estamos enviando esse email pois foram feitas alterações no seu contrato atual.')
            ->line('Recomendamos que acesse o sistema e verifique as alterações feitas.')
            ->action('Clique aqui para acessar nosso sistema', route('filament.company.auth.login'))
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
