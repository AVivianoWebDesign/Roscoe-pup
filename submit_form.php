<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email content
    $to = "drety9@gmail.com"; // Change this to your email address
    $subject = "New message from Timeshare Cancellation Landing Page";
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
} else {
    echo "Invalid request.";
}
?>
