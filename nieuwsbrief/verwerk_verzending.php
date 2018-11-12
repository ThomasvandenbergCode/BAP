<?php

// 0. uitlezen van de POST-array
$subject = $_POST['subject'];
$message = $_POST['message'];


// 1. Connectie maken met de DB
$dbc = mysqli_connect('localhost', 'thomas_gebruiker', '123456', 'thomas_db') or die('error connecting');
// 2. kijken in de database en alle mailadressen tevoorschijn halen
$query = "SELECT mailadres FROM nieuwsbrief";
$result = mysqli_query($dbc,$query) or die ('Error querying');


// 3. Loop waarin een bericht wordt verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'mail verzonden naar ' . $row['mailadres'] . '<br>';
    // variabelen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: 24609@ma-web.nl';
    // mail verzenden
    mail($to,$subject,$message,$headers);
}

echo 'Klaar met verzenden';