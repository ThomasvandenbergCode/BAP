<?php

$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];


$klas = $_POST['klas'];

$age = $_POST['age'];
$geslacht = $_POST['geslacht'];
$woonplaats = $_POST['woonplaats'];
$cijferOpleiding = $_POST['cijferOpleiding'];


echo 'welkom ' . $voornaam . $tussenvoegsel . $achternaam . ' , fijn dat je er bent!<br> <br>';

echo 'persoonlijke gegevens: <br> <br> <br> <br>';
echo 'jij bent ' . $age . ' jaar oud <br> ';

 if($woonplaats =="Alkmaar") { echo 'je woont in Alkmaar , dat is mooi om te horen <br>';}
 else { echo 'je woont in ' . $woonplaats . 'fijn <br> '; }



 if($geslacht == "man") {
     echo ' u bent een man, ik zal je vanaf nu aanspreken met hij <br> <br> <br> ';
 } else  {
     echo 'u bent een vrouw, ik zal je vanaf nu aanspreken met zij <br> <br> <br> ';
 }


echo 'school gegevens: <br> <br> <br>';



if($klas == "MG1D") {
     echo 'je zit in de klas ' . $klas . ' wees maar blij. <br> ';
} else {
     echo 'je zit in de klas ' . $klas . ' , mooi! <br> ';
}

echo 'jij geeft jou opleiding een ' . $cijferOpleiding . ' bedankt! <br>';


?>