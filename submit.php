<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'usmanalik77@gmail.com';

// Set the email subject
$email_subject = 'New message from your website: ' . $subject;

// Set the email message
$email_message = "Name: $name\nEmail: $email\n\n$message";

// Set the email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
mail($to, $email_subject, $email_message, $headers);

// Redirect the user to a thank-you page
header('Location: thankyou.html');