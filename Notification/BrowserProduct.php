<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 18.07.16
 * Time: 13:08
 */

namespace NotificationBundle\Controller;


class BrowserProduct implements AbstractSender
{
    use SendMessage;
}