<?php

$to = '24609@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From ' . $_POST['from'];

mail($to, $subject, $message, $headers);

echo 'Uw mail is verstuurd. Bedankt!';



