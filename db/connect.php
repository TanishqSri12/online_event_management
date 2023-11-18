<?php

$servername = "exbodcemtop76rnz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; // "localhost";
$username = "c5all0ef43f6jbeu"; //"root";
$password =  "this3c10ftjuzn5b"; // "";
$db = "ybh3xf27stfhyp0p"; //"eventmgmt";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
