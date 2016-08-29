<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:28
 */

namespace NotificationBundle\Notification;


use Symfony\Component\Config\Definition\Exception\Exception;

abstract class Sender
{
    /**
     * @return AbstractSenderFactory
     */
    public static function getSender($sender)
    {
        switch ($sender) {
            case 'browser': {
                return new BrowserSenderFactory();
            } break;
            case 'email': {
                return new EmailSenderFactory();
            } break;
            case 'sms': {
                return new SMSSenderFactory();
            } break;
            default: {
                return new Exception("Такой фабрики для уведомлений не существует");
            }
        }
    }
}