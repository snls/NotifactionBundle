<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:10
 */

namespace NotificationBundle\Notification;


class EmailSenderFactory implements AbstractSenderFactory
{
    protected $email;
    
    public function __construct()
    {
        $this->email = new EmailProduct();
    }
    
    public function send($message, $user)
    {
        return $this->email->sendMessage($message, $user);
    }
}