<?php
    class Clanarina{
        public $id;
        public $datumOd;
        public $datumDo;
        public $teretana;
        public $nalog_id;

        public function __construct($id, $datumOd, $datumDo, $teretana, $nalog_id){
            $this->id = $id;
            $this->datumOd = $datumOd;
            $this->datumDo = $datumDo;
            $this->teretana = $teretana;
            $this->nalog_id = $nalog_id;
        }


        public static function getAllClanarine($username, $conn){
            $query = "SELECT * FROM clanarina c INNER JOIN nalog n ON c.nalog_id=n.id WHERE n.username='$username'";
            return $conn->query($query);
        }







    }



?>