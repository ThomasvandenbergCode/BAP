<?php
$id = $_GET['id'];

$query = "DELETE FROM nieuwsbrief WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error querying');
header( "Location: beheren.php");

