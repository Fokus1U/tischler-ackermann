<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'd.schumacher@byteopus.de'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Danke für Ihre Nachricht. Wir werden uns umgehend um Ihr Anliegen kümmern!';
    } else {
        echo 'Entschuldigung. Etwas ist schief gelaufen. Bitte versuchen Sie es später noch einmal.';
    }
}
?>
