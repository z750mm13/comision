<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail;

class MyVerifyEmail extends VerifyEmail {
    /**
    * Build the mail representation of the notification.
    *
    * @param  mixed  $notifiable
    * @return \Illuminate\Notifications\Messages\MailMessage
    */
   public function toMail($notifiable) {
       $verificationUrl = $this->verificationUrl($notifiable);

       if (static::$toMailCallback) {
           return call_user_func(static::$toMailCallback, $notifiable, $verificationUrl);
       }

       return (new MailMessage)
           ->subject('Confirmación de correo electrónico')
           ->greeting('Hola')
           ->line('Haga clic en el botón de abajo para verificar su dirección de correo electrónico.')
           ->action('Confirmar correo electrónico', $verificationUrl)
           ->line('Si no creó esta cuenta, no se requiere ninguna otra acción.');
   }
}
