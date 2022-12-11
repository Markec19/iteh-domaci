<?php

require "../dbBroker.php";
    class User{
        //public $id;
        public $username;
        public $password;

        public function __construct($username, $password){
            //$this->id = $id;
            $this->username = $username;
            $this->password = $password;
        }

        public function addUser($conn){
            $query = "INSERT INTO nalog(username, password) VALUES ('$this->username', '$this->password')";
            return $conn->query($query);
        }
    }


    

?>