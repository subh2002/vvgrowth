<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Check if all fields are filled out
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    echo "Please fill out all fields.";
    exit;
}

// Set up the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=utf-8\r\n";

// Set up the email body
$body = "Name: $name\r\n";
$body .= "Email: $email\r\n";
$body .= "Subject: $subject\r\n";
$body .= "Message: $message\r\n";

// Send the email
mail("info@vvgrowth.tech", "Enquiry from $name", $body, $headers);

// Display JavaScript alert and redirect
echo "<script>alert('Thank you for your submission!'); window.location.href = 'contact.html';</script>";
?>
