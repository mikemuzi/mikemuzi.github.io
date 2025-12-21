<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "mikemuzi73@live.com";

    // Set the subject of the email
    $subject = "New Contact Form from  Submission";

 // Email body
    $body = "
    - Customer Application Form -

    Full Name: $name
    Email: $email
    Phone: $phone
    
    Customer Message:
    $message

    -------------------------------
    Sent on: " . date("Y-m-d H:i:s") . "
    ";

    

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message";

// Send email
    $sent = mail($to, $subject, $body, $headers);
    echo $sent ? "SUCCESS" : "ERROR";
}

?>