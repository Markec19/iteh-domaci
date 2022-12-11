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
    <script type="text/javascript" src="js/update.js"></script>

    <title>Izmena</title>
</head>
<body>
<div id="frm">
        <h1>Izmenite šifru</h1>
        <br><br>
        <div id="login">
            <form method="POST" id = "izmena">
                <div>
                    <label>Korisnicko ime</label><br>
                    <input type="text" name="korisnicko-imeI" class="form-control" id="korisnicko-imeI">
                </div>
                <br>
                <div class="form">
                    <label>Šifra</label><br>
                    <input type="password" name="sifraI" class="form-control" id="sifraI">
                    <div id="passwordHelpBlock" class="form-text">
                    </div>
                </div>
                <div class="form">
                    <label>Nova Šifra</label><br>
                    <input type="password" name="nova_sifra" class="form-control" id="nova_sifra">
                </div>
                <br>
                <div id="sub">
                    <button type="submit" class="btn btn-primary" id="btnP">Registrujte se</button>
                </div>
            </form>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    
</body>
</html>