<?php
    $servername = "localhost";
    $username = "Wednesday";
    $password = "mirza";
    $dbname = "myDBPDO";

    $sql="";



    /*try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE myDBPDO";
        $conn->exec($sql);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    $conn = null;*/

//    try {
//        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//        // set the PDO error mode to exception
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//        // sql to create table
//        $sql = "CREATE TABLE MyGuests (
//                  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                  firstname VARCHAR(30) NOT NULL,
//                  lastname VARCHAR(30) NOT NULL,
//                  email VARCHAR(50),
//                  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//            )";
//
//        // use exec() because no results are returned
//        $conn->exec($sql);
//        echo "Table MyGuests created successfully";
//    } catch(PDOException $e) {
//        echo $sql . "<br>" . $e->getMessage();
//    }

//    // Create connection
//    $conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
//
//    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//        VALUES ('John', 'Doe', 'john@example.com')";
//
//    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//
//    $conn->close();
//
//    $conn = null;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to create table
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES('Mirza', 'Omerovic','mirzao@xx.at')";

        // use exec() because no results are returned
        $conn->exec($sql);
        $guestId=$conn -> lastInsertId();
        echo "";
        //§sql = "INSERT INTO " da fehlt noch was
        $conn->exec($sql);
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

?>