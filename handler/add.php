<?php
require "../dbBroker.php";
require "../model/user.php";


    $user = new User($_GET["korisnicko-imeR"], $_GET["sifraR"]);

    $status = $user->addUser($conn);
    if($status){
        echo "Success";
    }
    else{
        echo "Fail";
    }


?>