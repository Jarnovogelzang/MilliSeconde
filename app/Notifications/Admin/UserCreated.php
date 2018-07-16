<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserCreated extends Notification {
  use Queueable;

  /**
   * @var mixed
   */
  protected $objUser;

  /**
   * Create a new notification instance.
   *
   * @return void
   */
  public function __construct(User $objUser) {
    $this->objUser = $objUser;
  }

  /**
   * Get the value of objUser
   */
  public function getObjUser() {
    return $this->objUser;
  }

  /**
   * Set the value of objUser
   *
   * @return  self
   */
  public function setObjUser($objUser) {
    $this->objUser = $objUser;

    return $this;
  }

  /**
   * Get the array representation of the notification.
   *
   * @param  mixed  $notifiable
   * @return array
   */
  public function toArray($notifiable) {
    return $this->getObjUser()->toArray();
  }

  /**
   * @param $notifiable
   * @return mixed
   */
  public function toDatabase($notifiable) {
    return [
      'intId' => $this->getObjUser()->getIntId(),
    ];
  }

  /**
   * Get the mail representation of the notification.
   *
   * @param  mixed  $notifiable
   * @return \Illuminate\Notifications\Messages\MailMessage
   */
  public function toMail($notifiable) {
    return (new MailMessage)
      ->line('The introduction to the notification.')
      ->action('Notification Action', url('/'))
      ->line('Thank you for using our application!');
  }

  /**
   * Get the notification's delivery channels.
   *
   * @param  mixed  $notifiable
   * @return array
   */
  public function via($notifiable) {
    return ['mail'];
  }
}