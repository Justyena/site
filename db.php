<?php

$servername = "localhost";
$username ="root";
$password ="";
$dbname ="registeruser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("connetion failed". mysqli_connect_error());
} else {
     "Succesfully connected!";
} 
?>