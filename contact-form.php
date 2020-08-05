<?php
    $name = $_POST['fname']; //   + $_POST['lname']
    $vistor_email = $_POST['email'];
    $email_subject = $_POST['subject']
    $message = $_POST['message'];
    $email_from = 'cupertinocoderdojo@gmail.com';
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                            "User Message: $message.\n";

    $to = "gavinmwong@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor";

    mail($to, $email_subject, $email_bdy, $headers);
    header("Location: index.html")
        
?>