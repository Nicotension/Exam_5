<?php

$userName = "if0_41499403";       
$hostName = "sql211.infinityfree.com";
$password = "Malcolmx0147";
$dbName = "if0_41499403_ebewd2_cr5_animal_adoption_nicholas";

$conn = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function cleanInputs($value)
{
    $data = trim($value);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>