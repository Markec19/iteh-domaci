<?php
require "dbBroker.php";
require "model/clan.php";

session_start();


if (isset($_POST['korisnicko-ime']) && isset($_POST['sifra'])) {
    $username = $_POST['korisnicko-ime'];
    $password = $_POST['sifra'];

    $rez = Clanarina::getAllClanarine($username, $conn);

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

if ($rez->num_rows == 0) {
    echo "Nema članarina!";
    die();
} else {
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Članarina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/termini.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <!-- <th scope="col">br</th> -->
                    <th scope="col">Datum od</th>
                    <th scope="col">Datum do</th>
                    <th scope="col">Teretana</th>
                </tr>
            </thead>
            <tbody>
                <?php
    while ($red = $rez->fetch_array()) {
                ?>
                <tr>
                    <td>
                        <?php echo $red["datumOd"] ?>
                    </td>
                    <td>
                        <?php echo $red["datumDo"] ?>
                    </td>
                    <td>
                        <?php echo $red["teretana"] ?>
                    </td>
                </tr>
                <?php
    }
}
                ?>
            </tbody>
        </table>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</body>

</html>