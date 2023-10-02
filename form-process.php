<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject=$_POST["subject"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "damidugimhan20@gmail.com";

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n\n";
    $message .= "Message:\n$message";

    // Send the email
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
