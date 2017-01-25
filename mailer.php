<?php

//set_include_path(get_include_path() . ':' . '.');
require 'vendor/autoload.php';
   date_default_timezone_set('Europe/Belgrade');

$bodyMail = '';
$subjectEmail = 'Mail from'.' '.$_POST['em_email'];


         $bodyMail = '<label><b>Email: </b></label>'.$_POST['em_email'].'<br>'.
              '<label><b>Phone: </b></label>'.$_POST['em_phone'].'<br>'.
              '<label><b>Company Name: </b></label>'.$_POST['em_company'].'<br>'.
              '<label><b>Service: </b></label>'.$_POST['em_dropdown'].'<br>'.
              '<label><b>Description: </b></label>'.$_POST['em_description'].'<br>';
            

$transport = Swift_SmtpTransport::newInstance('relay-hosting.secureserver.net', 25)
  ->setUsername('sacha@emiratesgraphic.com')  
  ->setPassword('Sacha@1122');

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance($subjectEmail)
  ->setFrom(array($_POST['em_email'] => 'emiratesgraphic.com'))
  ->setTo(array('sacha@emiratesgraphic.com' => ''))
  ->setBody($bodyMail, 'text/html');

// Send the message
$result = $mailer->send($message);

echo 'Email sent successfully';

?>