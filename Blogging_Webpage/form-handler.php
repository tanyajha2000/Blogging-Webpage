<?php
$name=$_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['sujbect'];
$message = $_POST['messages'];

$email_form = 'tanyajha0108@gmail.com';
$email_subject='New Form Submission';
$email_body="User Name: $name.\n"
            "User Email: $visitor_email.\n"
            "Subject: $subject.\n"
            "User Message: $message.\n";
    $to = '1841012116.a.tanyajha@gmail.com';
    $headers="Form: $email_body \r\n";
    $headers="Reply-to $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: contact.html");
?>