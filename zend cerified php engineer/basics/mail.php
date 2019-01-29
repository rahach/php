<?php

    $to      = 'example@yahoo.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: example@gmail.com' . "\r\n" .
        'Reply-To: example@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "sent";
    } else {
        echo "not sent";
    }
?>