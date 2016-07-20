<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 14:24
 */

namespace NotificationBundle\Controller\Notification;

/**
 * Отправка сообщения
 *
 * Class SendMessage
 * @package NotificationBundle\Controller\Notification
 */
trait SendMessage
{
    public function sendMessage($message, $user)
    {
        return [
            "message" => $message,
            "user" => $user
        ];
    }
}