<?php 
if(isset($_POST['n']) && isset($_POST['e']) && isset($_POST['m']) ){
    $n = $_POST['n'];
    $e = $_POST['e'];
    $m = nl2br($_POST['m']);
    $to = "rilindp@gmail.com";
    $from = $e;
    $subject = "Contact Form Message";

    $message = '<b>Name:</b>' .$n. '<br><b>Email:<b>' .$e. '<p>' .$m. '<p>';
    $headers = "Form: $form\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    if (mail($to, $subject, $message, $headers) ) {
    	echo "succsess";
    } else {
    	echo "The sever failed to send the message. Please try again later.";
    }
  }
?>  
