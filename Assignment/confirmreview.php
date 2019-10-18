<?php
    $to = 'f35ee@localhost';
    $subject = "NTU Pizza Delivery - Review Notification";
    $message = "Dear ".$_GET["FullName"]."\n".
    "We are pleased to inform you that we have recieved your review.\n".
    "We appreciate our customers providing us feedback as it allows us to".
    "improve for next time. We look foward to hearing from you soon".
    "Kind Regards,\n". 
    "The NTU Pizzeria";
    $message = wordwrap($message, 50);
    $headers = 'From: f35ee@localhost' . "\r\n".'Reply-To: f35e@localhost'.'X-Mailer: PHP/'.phpversion();
    mail($to,$subject,$message,$headers,'-ff32ee@localhost');
    header("Location: index.html");
?>
