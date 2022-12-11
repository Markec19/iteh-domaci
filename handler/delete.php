<?php
require "../dbBroker.php";
require "../model/user.php";


    $user = new User($_GET["korisnicko-imeB"], $_GET["sifraB"]);

    $status = $user->deleteUser($conn);
    if($status){
        echo "Success";
    }
    else{
        echo "Fail";
    }


?>