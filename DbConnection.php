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

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $emailExists = $conn->prepare('SELECT count(*) FROM MyGuests WHERE email = :email');
                $emailExists -> bindParam(':email', $email);
                $emailExists ->execute();
                $r = $emailExists->fetch();
                echo "EmailCount -> $r[0]";
                var_dump($r);
                $conn = null;



                if ($r[0] > 0){
                    echo "Email vorhanden";
                } else{
                    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
                    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
                        VALUES (:firstname, :lastname, :email)");
                    $stmt -> bindParam(':firstname', $firstname);
                    $stmt -> bindParam(':firstname', $lastname);
                    $stmt -> bindParam(':email', $email);
                    $stmt -> execute();
                    echo "User Created";
                }

            }
            catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
            $conn = null;
        }




    }