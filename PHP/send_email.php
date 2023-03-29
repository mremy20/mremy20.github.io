<?php
// Retrieve form data
$name = $_POST['Your Name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create email headers
$headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// Construct email message
$to = 'recipient@example.com'; // Replace with desired recipient email address
$subject = 'New message from ' . $name;
$body = "Name: " . $name . "\n\n" . "Email: " . $email . "\n\n" . "Message: " . $message;

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully.';
} else {
    echo 'Message failed to send.';
}
?>