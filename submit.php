<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Compose email
    $to = "mmkth9@umsystem.edu";
    $subject = "Educational Website Contact";
    $body = "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // Send email
    $headers = "From: $email\r\n";
    $success = mail($to, $subject, $body, $headers);

    if ($success) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
