<?php
// class DBBrocker{
    
//     public $host;
//     public $username;
//     public $password;
//     public $db;
//     public $conn;

//     public function __construct() {
//         $this->host = "localhost";
//         $this->username = "root";
//         $this->password = "";
//         $this->db = "nalog";
        
//         $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
//     }

    
    
// } 

$host = "localhost";
$username = "root";
$password = "";
$db = "nalog";

$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_errno){
    exit("Neuspešna konekcija: $conn->connect_error err kod $conn->connect_errno" );
} 


?>