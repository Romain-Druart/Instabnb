<?php

namespace App\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestMailController extends AbstractController
{
    /**
     * @Route("/test/mail", name="test_mail")
     */
    public function index($name, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'test_mail/index.html.twig',
                    ['name' => $name]
                ),
                'text/html'
            );

        $mailer->send($message);

        return $this->render(':test_mail:index.html.twig', ['controller_name' => 'TestMailController']);
    }
}
