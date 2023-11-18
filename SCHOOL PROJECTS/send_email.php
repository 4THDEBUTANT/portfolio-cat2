<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "Omondikamaud@gmail.com";

    // Set the email subject
    $subject = "New Contact Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    exit();
}
?>
