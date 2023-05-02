<?php
if(isset($_POST['submit'])) {
  // Collect the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Validate form data
  $errors = array();
  if(empty($name)) {
    $errors[] = 'Name is required';
  }
  if(empty($email)) {
    $errors[] = 'Email is required';
  } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
  }
  if(empty($subject)) {
    $errors[] = 'Subject is required';
  }
  if(empty($message)) {
    $errors[] = 'Message is required';
  }

  // If there are no errors, send the email
  if(empty($errors)) {
    $to = 'usmanalik77@example.com';
    $headers = 'From: '.$name.' <'.$email.'>' . "\r\n" .
               'Reply-To: '.$email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    $success = 'Your message has been sent!';
  }
}
?>