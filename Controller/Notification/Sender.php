<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:28
 */

namespace NotificationBundle\Controller\Notification;


abstract class Sender
{
    public static function send(AbstractSenderFactory $abstractSenderFactory, $message, $user)
    {
        return $abstractSenderFactory->sendMessage($message, $user);
    }
}