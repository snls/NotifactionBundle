<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:07
 */

namespace NotificationBundle\Controller;


interface AbstractSender
{
    public function sendMessage($message, $user);
}