<?php

namespace NotificationBundle\Controller;

use NotificationBundle\Notification\Sender;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('NotificationBundle:Default:index.html.twig', [
            'sender1' => Sender::getSender('email')->send("Тестовое сообщение для e-mail", "Тестовый пользователь"),
            'sender2' => Sender::getSender('browser')->send("Тестовое сообщение для browser", "Тестовый пользователь"),
            'sender3' => Sender::getSender('sms')->send("Тестовое сообщение для sms отправки", "Тестовый пользователь")
        ]);
    }
}
