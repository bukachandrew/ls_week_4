<?php

namespace App;

use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class SendMail
{
    public function send(array $mail, string $title, string $message)
    {
        try {
            $transport = (new Swift_SmtpTransport(MAIL_HOST, MAIL_PORT))
                ->setUsername(MAIL_USER)
                ->setPassword(MAIL_PASSWORD);

            $mailer = new Swift_Mailer($transport);

            $messageMail = (new Swift_Message($title))
                ->setFrom([MAIL_USER])
                ->setTo($mail)
                ->setBody($message);

            $result = $mailer->send($messageMail);

            return $result;
        } catch (\Exception $e) {
            var_dump("Error: " . $e);
        }
    }

}