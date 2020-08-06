<?php

if (isset($_POST['submit'])) {
    $name = $_POST['fname']; //   + $_POST['lname']
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject']
    $message = $_POST['message'];
    
    $mailTo = "gavinmwong@gmail.com";\n
.$message;    
    $headers = "From: " .$mailFrom;
    
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend")
}
    

    
    

    
        
?>