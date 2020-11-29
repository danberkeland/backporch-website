<?php
require_once 'vendor/autoload.php';

function sendEmail($message, $subject, $email)
{
    $from_email = "info@backporchbakery.square.site"; //update here
    $password = "yourPass"; //update here
    $port = 25; //update here
    $host = "mail.backporchbakery.com"; //update here
    try {

        // Create the SMTP Transport
        $transport = (new Swift_SmtpTransport($host, $port))
            ->setUsername($from_email)
            ->setPassword($password);

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
        $message = (new Swift_Message($subject))
            ->setFrom([$from_email => 'Apply Form'])
            ->setTo([$email, 'info@backporchbakery.square.site' => 'user'])
            ->setBody($message, 'text/html');

        // Send the message
        $success = $mailer->send($message);
        if ($success) {
            return 'success';
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }

}
