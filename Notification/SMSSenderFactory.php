<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:12
 */

namespace NotificationBundle\Controller;


class SMSSenderFactory implements AbstractSenderFactory
{
    protected $sms;

    public function __construct()
    {
        $this->sms = new SMSProduct();
    }

    public function send($message, $user)
    {
        return $this->sms->sendMessage($message, $user);
    }
}