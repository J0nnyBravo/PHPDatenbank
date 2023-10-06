<?php require_once './DbConnection.php';

    $connection = new DbConnection();
    $connection->createNewGuest("mirza", "Hinterseher", "mirzao@xx.at");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <label style="padding-right: 10px">Vorname</label>
    <input type="text" name="firstname"><br>
    <label>Nachname</label>
    <input type="text" name="lastname"><br>
    <label>Email</label>
    <input type="text" name="email"><br>
    <input type="submit">
</form>

    <?php $firstname =  $_POST["firstname"]; ?><br>
    <?php $lastname =  $_POST["lastname"]; ?><br>
    <?php $email =  $_POST["email"]; ?><br>



</body>
</html>

