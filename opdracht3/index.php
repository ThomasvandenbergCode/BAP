<!doctype html>
<html lang="en">
<head>

    <title>opdracht 3</title>
</head>
<body>
<h1> welkom op mijn website!</h1>


<?php

        $naam = 'Thomas';
        $woonplaats = 'Daalmeer';
        $intLeeftijd = 16;
        $postcode = '1827LP';
        $int1 = 18;

        echo 'hoi mijn naam is ' . $naam . ' ik ben ' . $intLeeftijd . ' jaar oud' . "<br>";
        echo 'mijn postcode is ' . $postcode .  "<br>" . "<br>";


if ($intLeeftijd <= 18) {
    echo 'je bent helaas niet oud genoeg om te drinken en te stemmen in Nederland' . "<br>";
}
 else {
    echo 'je bent achtien jaar of ouder, dus je mag drinken en stemmen';
 }


?>

</body>
</html>
