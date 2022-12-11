<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/prijava.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/delete.js"></script>

    <title>Brisanje</title>
</head>
<body>
<div id="frm">
        <h1>Brisanje</h1>
        <br><br>
        <div id="login">
            <form method="POST" id = "brisanje">
                <div>
                    <label>Korisnicko ime</label><br>
                    <input type="text" name="korisnicko-imeB" class="form-control" id="korisnicko-imeB">
                </div>
                <br>
                <div class="form">
                    <label>Šifra</label><br>
                    <input type="password" name="sifraB" class="form-control" id="sifraB">
                    <div id="passwordHelpBlock" class="form-text">
                    </div>
                </div>
                <br>
                <div id="sub">
                    <button type="submit" class="btn btn-primary" id="btnI">Izbrisi</button>
                </div>
            </form>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    
</body>
</html>