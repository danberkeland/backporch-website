<?php
require_once 'email/vendor/autoload.php';
$mail->Host = 'a2plcpnl0920.prod.iad2.secureserver.net';    // Must be GoDaddy host name
$mail->SMTPAuth = true; 
$mail->Username = '_mainaccount@backporchbakery.com';
$mail->Password = 'Silverroad48!';
$mail->mailEncryption = 'tls';   // ssl will no longer work on GoDaddy CPanel SMTP
$mail->Port = 587;    // Must use port 587 with TLS
if (isset($_REQUEST)) {


    $availableToWork="";
    $seek="";

    $experienceBread = $_REQUEST['experienceBread'];


    if(!empty($_REQUEST['availableToWork']))
    {
          $options = $_REQUEST['availableToWork'];
          foreach($options as $option) //loop through the checkboxes
          {
               $availableToWork = $availableToWork.$option." ";
          }
    }

    
    $experience = $_REQUEST['experience'];

    if(!empty($_REQUEST['seek']))
    {
          $options = $_REQUEST['seek'];
          foreach($options as $option) //loop through the checkboxes
          {
               $seek = $seek.$option." ";
          }
    }

    
    $currentOccupation = $_REQUEST['currentOccupation'];
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $email = $_REQUEST['email'];

    
    $message = $firstName." ".$lastName."\n".
        $email."\n".
        "Bakery Experience: ".$experienceBread."\n".
        "Kitchen Experience: ".$experience."\n".
        "Location Availability: ".$availableToWork."\n".
        "Seeking: ".$seek."\n".
        "Currently: ".$currentOccupation."\n";



    $subject = 'BPB has a new job applicant! ';
    
    try {

        // Create the SMTP Transport
        $transport = (new Swift_SmtpTransport('a2plcpnl0920.prod.iad2.secureserver.net', 587, 'tls'))
            ->setUsername('_mainaccount@backporchbakery.com')
            ->setPassword("Silverroad48!");
        
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
        $message = (new Swift_Message($subject))
            ->setFrom(['_mainaccount@backporchbakery.com' => 'BPB Job Application'])           
            ->setTo(['backporchbakeryslo@gmail.com' => 'Dan Berkeland'])
            ->setBody($message);
            

        
        if (is_uploaded_file($_FILES['customFile']['tmp_name'])) {

            $message->attach(Swift_Attachment::fromPath($_FILES['customFile']['tmp_name'])->setFilename($_FILES['customFile']['name'])
            );
        }
            
        

        // Send the message
        $success = $mailer->send($message);
        if ($success) {
            
            echo "<script>alert('Thanks for applying!  We will review your information and get back to you soon.');</script>";
            echo "<script>window.location ='https://www.backporchbakery.com'</script>";
            
        }

    } catch (Exception $e) {
        echo $e->getMessage();
    }

    
}



?>

