<?php

namespace NotificationBundle\Controller;

use NotificationBundle\Controller\Notification\BrowserSenderFactory;
use NotificationBundle\Controller\Notification\EmailSenderFactory;
use NotificationBundle\Controller\Notification\Sender;
use NotificationBundle\Controller\Notification\SMSSenderFactory;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/notification")
     */
    public function indexAction()
    {
        $email = EmailSenderFactory::class;
        return $this->render('NotificationBundle:Default:index.html.twig', [
            'sender1' => Sender::send(new $email, "Тестовое сообщение для e-mail", "Тестовый пользователь"),
            'sender2' => Sender::send(new BrowserSenderFactory(), "Тестовое сообщение для browser", "Тестовый пользователь"),
            'sender3' => Sender::send(new SMSSenderFactory(), "Тестовое сообщение для sms отправки", "Тестовый пользователь")
        ]);
    }
}
