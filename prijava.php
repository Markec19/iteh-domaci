<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>

    <link rel="stylesheet" type="text/css" href="css/prijava.css">

</head>

<body>

    <div id="frm">
        <h1>Prijava</h1>
        <br><br>
        <div id="login">
            <form method="POST" action="clanarina.php">
                <div>
                    <label>Korisnicko ime</label><br>
                    <input type="text" name="korisnicko-ime" class="form-control" id="korisnicko-ime">
                </div>
                <br>
                <div class="form">
                    <label>Šifra</label><br>
                    <input type="password" name="sifra" class="form-control" id="sifra">
                    <div id="passwordHelpBlock" class="form-text">
                    </div>
                </div>
                <br>
                <div id="sub">
                    <button type="submit" class="btn btn-primary" id="btnP">Prijavi se</button>
                </div>
            </form>
        </div>
    </div>
    <div>
    <a href="registracija.php"><button type="submit" class="btn btn-primary">Registracija</button></a>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</body>

</html>