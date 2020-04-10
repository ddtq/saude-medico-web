<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Notifier\Message\SmsMessage;
use Symfony\Component\Notifier\TexterInterface;
 

class SendLinkSmsController extends AbstractController
{
    /**
     * @Route("/send/link/sms", name="send_link_sms")
     */
    public function loginSuccess(TexterInterface $texter)
    {
        $sms = new SmsMessage(
            // the phone number to send the SMS message to
            '+5541984145679',
            // the message
            'Hello Renan you just sent a message now  !'
        );

        try {
            //code...
            $texter->send($sms);

        } catch (\Throwable $th) {
             throw $th;
        }

        

        // ...

        // return $this->render('send_link_sms/index.html.twig', [
        //     'controller_name' => 'SendLinkSmsController',
        // ]);
    }
     
}
