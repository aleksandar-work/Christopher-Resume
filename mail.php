<?php
$to = 'christopher.benitez1128@gmail.com';
$subject = 'Contract';
$message = 'This is Chris.';
$headers = 'From: julian.kunzig03@gmail.com' . "\r\n" .
'Reply-To: julian.kunzig03@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo('Sent the message successfully!');
