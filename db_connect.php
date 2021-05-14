<?php

/* Database connection start */

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "soarprint";// Create connection


$servername = "localhost";
$username = "printnuk_soar";
$password = "soarprint@123";
$dbname = "printnuk_soarprint";// Create connection


$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>