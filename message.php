<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $website = htmlspecialchars($_POST["website"]);
    $message = htmlspecialchars($_POST["message"]);

    // Check if email and message fields are not empty
    if (!empty($email) && !empty($message)) {
        // Validate the email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $receiver = "aeshgoswamiwd@gmail.com";
            $subject = "Message from: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
            $headers = "From: $email";

            // Attempt to send the email
            if (mail($receiver, $subject, $body, $headers)) {
                echo "Your message has been sent!";
            } else {
                echo "Sorry, failed to send your message. Please try again later.";
            }
        } else {
            echo "Enter a valid email address!";
        }
    } else {
        echo "Email and message fields are required!";
    }
}
?>
