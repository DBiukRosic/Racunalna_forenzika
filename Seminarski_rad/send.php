<?php
// Email recipient
$to = 'victim@mail.com';

// Subject of the email
$subject = 'Mail subject';

// Message body
$message = 'This is the message body.';

// Sender's email and name
$senderEmail = 'attacker@mail.com';
$senderName = 'Attacker';

// Headers
$headers = 'From: ' . $senderName . ' <' . $senderEmail . '>' . '\r\n' . 
    'Reply-To: ' . $senderEmail . '\r\n' . 
    'X-Mailer: PHP/' . phpversion();

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Failed to send email.';
}
?>