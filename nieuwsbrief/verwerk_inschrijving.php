<?php

    $titel = $_POST['titel'];
    $inleiding = $_POST['inleiding'];
    $middenstuk = $_POST['middenstuk'];
    $slot = $_POST['slot'];
    $auteur = $_POST['auteur'];
    $imagelink = $_POST['imagelink'];

    // DATA IN DATABASE STOPPEN
    // 1. VERBINDING MAKEN MET DATABASE
   $dbc =  mysqli_connect( 'localhost','root', '','myband_db')or die ('Error connecting');


    // 2. OPDRACHT  (QUERY) SCHRIJVEN VOOR DE DATABASE
    $query = "INSERT INTO articles VALUES (0,'$titel','$inleiding','$middenstuk','$slot','$auteur','$imagelink')";
    // 3. QUERY UITVOEREN
    $result = mysqli_query($dbc,$query) or die('ERROR quering.');
    // 4. VERBINDING VERBREKEN
    mysqli_close($dbc);

    // BEVESTINGEN DAT DATA IN DATABASE STAAT
   if ($result) {
       echo '<strong>' . 'De volgende gegevens zijn toegevoegd aan de database:' . '</strong>' . '<br>' ;
       echo '<strong>' . 'titel:' . '</strong>' . $titel . '<br>';
       echo '<strong>' . 'inleiding) ' . '</strong>'  . $inleiding . '<br>';
       echo '<strong>' . 'middenstuk: ' . '</strong>' . $middenstuk . '<br>';
       echo '<strong>' . 'slot: ' . '</strong>' . $slot . '<br>';
       echo '<strong>' . 'auteur: ' . '</strong>' . $auteur . '<br>';
       echo '<strong>' . 'imagelink: ' . '</strong>' . $imagelink . '<br>';
   } else {

        echo 'Sorry, er is iets misgegaan. Probeer het opnieuw';
   }

   ?>

<a href="index.php">Klik hier om terug te keren naar de homepage</a><br><br>
