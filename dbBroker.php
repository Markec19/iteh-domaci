<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "nalog";

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_errno){
    exit("Neuspešna konekcija: $conn->connect_error err kod $conn->connect_errno" );
} 
?>