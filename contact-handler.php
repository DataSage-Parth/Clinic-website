<?php
if ($_POST) {
    $to = "your-email@example.com";  // change to your email
    $subject = "New Appointment Request";
    $message = "
    Name: ".$_POST['name']."
    Email: ".$_POST['email']."
    Phone: ".$_POST['phone']."
    Message: ".$_POST['message']."
    ";
    $headers = "From: noreply@neurokidscare.com";

    mail($to, $subject, $message, $headers);
    header("Location: thank-you.html");
}
?>
