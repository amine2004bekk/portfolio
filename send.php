<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $message = $_POST['message'];

    $to      = "aminemustaphabekkaye@example.com";  // <-- your email here
    $subject = "New message from portfolio site";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Message sent successfully!";
}
?>
