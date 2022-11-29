<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Prijava</h1>
    <div id="frm">
        <form method ="POST" action="termini.php">
            <div>
                <label>Korisnicko ime</label><br>
                <input type="text" name="korisnicko-ime" class="form-control" id="korisnicko-ime">
            </div>
        <div class="form">
            <label>Šifra</label>
            <input type="password" name = "sifra" class="form-control" id="sifra">
            <div id="passwordHelpBlock" class="form-text">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id = "btn">Prijavi se</button>
        </form>
    </div>
</body>
</html>