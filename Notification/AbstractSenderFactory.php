<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:09
 */

namespace NotificationBundle\Controller;


interface AbstractSenderFactory
{
    public function send($message, $user);
}