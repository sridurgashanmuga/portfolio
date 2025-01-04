<?php

// Get form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Your email address
$to = "ssridurga053@gmail.com"; 

// Create email subject
$subject = "New Message from Portfolio";

// Create email body
$body = "Name: " . $full_name . "\n" .
        "Email: " . $email . "\n" .
        "Message: " . $message;

// Email headers
$headers = "From: " . $email . "\r\n"; // Use sender's email

// Send email
if(mail($to, $subject, $body, $headers)) {
  echo "<script>alert('Message sent successfully!');
  </script>";
} else {
  echo "<script>alert('Email sending failed.');</script>";
}

?>