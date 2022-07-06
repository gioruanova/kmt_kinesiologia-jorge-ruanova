<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $whatsapp = $_POST['whatsapp'];
    
    $email_subject = "NEW MESSAGE VIA CONTACT FORM";
    
    $email_body = "You have received a new message from the user ".$name. ".\n".$message; ".\n".$whatsapp;
    
    $to = "jruanova1987@gmail.com"
    $headers = "From: ";
    $headers .= $visitor_email;
    
    mail($to, $email_subject, $email_body, $headers);
    header('Location: ../');
}
?>