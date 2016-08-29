<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:12
 */

namespace NotificationBundle\Controller;


class BrowserSenderFactory implements AbstractSenderFactory
{
    protected $browser;

    public function __construct()
    {
        $this->browser = new BrowserProduct();
    }

    public function send($message, $user)
    {
        return $this->browser->sendMessage($message, $user);
    }
}