<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactNotification extends Notification
{
    use Queueable;

    protected $fromFullnameUser;
    protected $fromEmailUser;
    protected $fromSubjectUser;
    protected $fromMessageUser;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($fromFullnameUser,$fromEmailUser,$fromSubjectUser,$fromMessageUser)
    {
        $this->fromFullnameUser = $fromFullnameUser;
        $this->fromEmailUser = $fromEmailUser;
        $this->fromSubjectUser = $fromSubjectUser;
        $this->fromMessageUser = $fromMessageUser;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //dd($this->fromMessageUser);
        return (new MailMessage)
                    ->greeting('Hello')
                    ->subject("Contact depuis la page contact de ".config('app.name'))
                    ->from($this->fromEmailUser,config('app.name'))
                    ->line($this->fromFullnameUser.' vous a laissez un message - '.config('app.name'))
                    ->line($this->fromMessageUser)
                    ->salutation('Visite le dashboard du site pour en savoir plus!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
