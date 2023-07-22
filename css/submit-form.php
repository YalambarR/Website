<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'yalambar.rai@unh.edu';
    $headers = "From: $name <$email>";
    $body = "Subject: $subject\n\n$message";
    mail($to, $subject, $body, $headers);

    header('Location: thank-you.html');
    exit;
}
?>
