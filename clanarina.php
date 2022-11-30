<?php
require "dbBroker.php";

session_start();


if (isset($_POST['korisnicko-ime']) && isset($_POST['sifra'])) {
    $username = $_POST['korisnicko-ime'];
    $password = $_POST['sifra'];

    if (empty($username)) {
        header("Location: prijava.php?error");
    } else if (empty($password)) {
        header("Location: prijava.php?error");
    } else {
        $query = "SELECT * FROM nalog WHERE username = '$username' AND password = '$password'";

        $res = mysqli_query($conn, $query);

        if (mysqli_num_rows($res) == 0) {
            header("Location: prijava.php?error");
            exit();
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clanarina</title>
</head>
<body>
    <div>Ovo je neki tekst</div>
</body>
</html>