<?php
require "../dbBroker.php";
require "../model/user.php";


    $user = new User($_GET["korisnicko-imeI"], $_GET["sifraI"]);
    $new_pass = $_GET["nova_sifra"];

    $status = $user->updateUser($new_pass, $conn);
    if($status){
        echo "Success";
    }
    else{
        echo "Fail";
    }


?>