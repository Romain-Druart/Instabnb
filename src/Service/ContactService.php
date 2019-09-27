<?php

namespace App\Service;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Tests\Encoder\PasswordEncoder;

class ContactService
{
    private $mailer;
    private $sender;

    public function send(string $message) : string
    {
        $this->mailer->send(
            (new \Swift_Message($message))
            ->setFrom($this->sender)
            ->setTo('test@test.com')
            ->setBody($message)
        );
    }

    public function testMyService() : string
    {
        return 'je suis passé par le service';
    }
}