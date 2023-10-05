<?php

    class DbConnection
    {
        public $servername = "localhost";
        public $username = "Wednesday";
        public $password = "mirza";
        public $dbname = "myDBPDO";

        public function createDatabase()
        {
            try {
                $conn = new PDO("mysql:host=$this->servername", $this->username, $this->password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "CREATE DATABASE myDBPDO";
                $conn->exec($sql);
                echo "Connected successfully";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            $conn = null;
        }

        public function createNewGuest($firstname, $lastname, $email): void
        {
            try {
                $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                var_dump($conn);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare('SELECT count(*) FROM MyGuests WHERE email = :email');
                $stmt -> bindParam(':email', $email);
                //$stmt -> bindParam(':firstname', $firstname);
                $stmt ->execute();

                var_dump($stmt);
//                $r = $stmt->fetchAll();
//                var_dump($r);
                $r = $stmt->fetch();
                echo $r[0];
                if ($r[0] > 0){
                    echo "Emil vorhanden";
                } else{
                    echo "User Created";
                }

            }
            catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }



            $conn = null;
        }




    }