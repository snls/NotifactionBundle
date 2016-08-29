<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:09
 */

namespace NotificationBundle\Notification;


class SMSProduct implements AbstractSender
{
    use SendMessage;
}