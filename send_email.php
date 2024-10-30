<?php
// Define the email address to receive the message
$to = "bossmarang@gmail.com";
$subject = "New Message from QuickGadgetFix";

// Get form data and sanitize it
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Compose the email body
$email_content = "Name: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Message:\n$message\n";

// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if(mail($to, $subject, $email_content, $headers)) {
    echo "Thank you! Your message has been sent.";
} else {
    echo "Oops! Something went wrong, and we couldn't send your message.";
}
?>
