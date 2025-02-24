<?php

namespace App\Notifications\Company;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCompany extends Notification
{

    use Queueable;

    private User $user;

    private String $password;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, String $password)
    {
        $this->user = $user;
        $this->password = $password;
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
            ->subject('Novo Cadastro')
            ->greeting("Olá,")
            ->line($this->user->name . ' uma nova conta foi criada para você em nosso sistema.')
            ->line('A senha gerada para esta conta é: ' . $this->password)
            ->line('Recomendamos que troque sua senha, para isso clique no menu no canto superior direto, e clique em Perfil.')
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
